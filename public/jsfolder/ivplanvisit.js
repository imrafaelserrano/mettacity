  const faqWrapper = document.getElementById("faqWrapper");
  const faqToggle = document.getElementById("faqToggle");

  faqToggle.addEventListener("click", () => {
    faqWrapper.classList.toggle("active");
  });
document.addEventListener("DOMContentLoaded", () => {

  const calendar = document.getElementById("calendar");
  const toggle = document.getElementById("toggleCalendar");
  const daysGrid = document.getElementById("daysGrid");
  const monthLabel = document.getElementById("monthLabel");
  const selectedDateText = document.getElementById("selectedDate");
  const prevBtn = document.getElementById("prevMonth");
  const nextBtn = document.getElementById("nextMonth");

  const MIN_DATE = new Date(2026, 0, 1);
  const MAX_DATE = new Date(2030, 0, 31);

  let currentDate = new Date(2026, 0, 1);

  const monthNames = [
    "JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE",
    "JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"
  ];

  toggle.addEventListener("click", () => {
    calendar.classList.toggle("open");
  });

  document.addEventListener("click", e => {
    if (!e.target.closest(".date-picker-wrapper")) {
      calendar.classList.remove("open");
    }
  });

  function renderCalendar() {
    daysGrid.innerHTML = "";
    monthLabel.textContent =
      `${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    const firstDay = new Date(year, month, 1).getDay() || 7;
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 1; i < firstDay; i++) {
      daysGrid.appendChild(document.createElement("div"));
    }

    for (let d = 1; d <= daysInMonth; d++) {
      const cellDate = new Date(year, month, d);
      const cell = document.createElement("div");
      cell.className = "day";
      cell.textContent = d;

      if (cellDate >= MIN_DATE && cellDate <= MAX_DATE) {
        cell.classList.add("available");
        cell.addEventListener("click", () => {
          document.querySelectorAll(".day")
            .forEach(el => el.classList.remove("selected"));
          cell.classList.add("selected");
          selectedDateText.value =
            `${monthNames[month]} ${d}, ${year}`;
          calendar.classList.remove("open");
        });
      }

      daysGrid.appendChild(cell);
    }
  }

  prevBtn.onclick = () => {
    const prev = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
    if (prev >= MIN_DATE) {
      currentDate = prev;
      renderCalendar();
    }
  };

  nextBtn.onclick = () => {
    const next = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
    if (next <= MAX_DATE) {
      currentDate = next;
      renderCalendar();
    }
  };

  renderCalendar();
});


  function setupMarquee() {
    const track = document.getElementById("marqueeTrack");
    const set = document.getElementById("marqueeSet");
    if (!track || !set) return;

    // Remove old clones (keep the first set)
    [...track.children].forEach((child, i) => {
      if (i > 1) child.remove();
    });

    // Measure one set width
    const setWidth = set.getBoundingClientRect().width;

    // Clone until track is at least 2x viewport width (prevents blanks)
    const viewportWidth = window.innerWidth;
    const needed = Math.ceil((viewportWidth * 2) / setWidth);

    for (let i = 0; i < needed; i++) {
      const clone = set.cloneNode(true);
      clone.removeAttribute("id");
      clone.setAttribute("aria-hidden", "true");
      track.appendChild(clone);
    }

    // Set exact distance for seamless looping (one-set width)
    track.style.setProperty("--marquee-distance", `${setWidth}px`);

    // Optional: auto adjust speed based on width (feels consistent)
    // bigger setWidth = longer duration
    const duration = Math.max(10, Math.min(22, setWidth / 60));
    track.style.setProperty("--marquee-duration", `${duration}s`);
  }

  window.addEventListener("load", setupMarquee);
  window.addEventListener("resize", setupMarquee);

  // IntersectionObserver for statement-section visibility
  document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".statement-section");
    if (!section) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
          } else {
            entry.target.classList.remove("is-visible");
          }
        });
      },
      { threshold: 0.1 }
    );

    observer.observe(section);
  });
