document.addEventListener("DOMContentLoaded", function () {
  // Update current date
  const dateElement = document.querySelector(".date");
  const options = {
    weekday: "long",
    day: "numeric",
    month: "long",
    year: "numeric",
  };
  const formattedDate = new Date().toLocaleDateString("en-US", options);
  dateElement.textContent = formattedDate;

  // Task checkbox functionality
  const taskCheckboxes = document.querySelectorAll(".task-checkbox");
  taskCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("click", function () {
      this.classList.toggle("checked");
      updateStats();
    });
  });

  // Priority task functionality
  const priorityTasks = document.querySelectorAll(".priority-task");
  priorityTasks.forEach((task) => {
    task.addEventListener("click", function () {
      this.style.textDecoration =
        this.style.textDecoration === "line-through" ? "none" : "line-through";
      updateStats();
    });
  });

  // Update statistics based on completed tasks
  function updateStats() {
    const totalTasks = taskCheckboxes.length + priorityTasks.length;
    const completedCheckboxes = document.querySelectorAll(
      ".task-checkbox.checked"
    ).length;
    const completedPriority = Array.from(priorityTasks).filter(
      (task) => task.style.textDecoration === "line-through"
    ).length;

    const totalCompleted = completedCheckboxes + completedPriority;
    const percentCompleted = Math.round((totalCompleted / totalTasks) * 100);
    const percentInProgress = 100 - percentCompleted;

    document.querySelector(".stat-value").textContent = percentCompleted + "%";
    document.querySelectorAll(".stat-value")[1].textContent =
      percentInProgress + "%";
  }

  // Add task functionality
  const addTaskBtn = document.querySelector(".add-task-btn");
  addTaskBtn.addEventListener("click", function () {
    const taskName = prompt("Enter task name:");
    if (taskName && taskName.trim() !== "") {
      const tasksList = document.querySelector(".tasks-list");

      const newTask = document.createElement("div");
      newTask.className = "task-item";

      const checkbox = document.createElement("div");
      checkbox.className = "task-checkbox";
      checkbox.addEventListener("click", function () {
        this.classList.toggle("checked");
        updateStats();
      });

      const label = document.createElement("div");
      label.className = "task-label";
      label.textContent = taskName;

      newTask.appendChild(checkbox);
      newTask.appendChild(label);
      tasksList.insertBefore(
        newTask,
        tasksList.querySelector(".priority-task")
      );

      updateStats();
    }
  });

  // Navigation functionality
  const navItems = document.querySelectorAll(".nav-item");
  navItems.forEach((item) => {
    item.addEventListener("click", function () {
      navItems.forEach((nav) => nav.classList.remove("active"));
      this.classList.add("active");
    });
  });

  // Sync button functionality
  const syncBtn = document.querySelector(".sync-btn");
  syncBtn.addEventListener("click", function () {
    alert("Syncing data with server...");
    // In a real app, this would make an AJAX call to a PHP backend
  });
});
