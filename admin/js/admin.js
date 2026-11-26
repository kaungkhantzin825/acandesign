/* Shared admin-panel behaviour (loaded on every page by partials/footer.php). */
(function () {
  "use strict";

  // Confirmation dialogs: any link or button with data-confirm="…" asks first
  // (the text is printed by PHP in the current admin language).
  document.addEventListener("click", function (e) {
    var el = e.target.closest("[data-confirm]");
    if (el && !window.confirm(el.getAttribute("data-confirm"))) {
      e.preventDefault();
      e.stopImmediatePropagation();
    }
  }, true);

  // <select data-autosubmit> submits its form as soon as the choice changes.
  document.addEventListener("change", function (e) {
    if (e.target.matches && e.target.matches("[data-autosubmit]") && e.target.form) {
      e.target.form.submit();
    }
  });

  // Bulk delete on the list pages: "select all" checkbox + enable the delete
  // button only while at least one row is checked.
  var bulkDeleteBtn = document.getElementById("bulkDeleteBtn");
  if (bulkDeleteBtn) {
    var selectAll = document.getElementById("selectAll");
    var rowChecks = document.querySelectorAll(".rowCheck");

    var updateBulkBtn = function () {
      var checked = Array.prototype.filter.call(rowChecks, function (c) { return c.checked; }).length;
      bulkDeleteBtn.disabled = checked === 0;
      var counter = document.getElementById("bulkSelectedCount");
      if (counter) counter.textContent = checked;
    };

    if (selectAll) {
      selectAll.addEventListener("change", function () {
        rowChecks.forEach(function (c) { c.checked = selectAll.checked; });
        updateBulkBtn();
      });
    }
    rowChecks.forEach(function (c) { c.addEventListener("change", updateBulkBtn); });
    updateBulkBtn();
  }
})();
