$(document).ready(function() {
  let counter = 1;

  $("#addBtn").click(function() {
    let fio = $("#fio").val().trim();
    let fakultet = $("#fakultet").val().trim();

    if (fio === "" || fakultet === "") {
      alert("⚠️ Iltimos, barcha maydonlarni to‘ldiring!");
      return;
    }

    let newRow = `
      <tr>
        <td>${counter}</td>
        <td>${fio}</td>
        <td>${fakultet}</td>
      </tr>
    `;

    $("#studentsTable tbody").append(newRow);
    counter++;
    $("#fio").val("");
    $("#fakultet").val("");
  });
});
