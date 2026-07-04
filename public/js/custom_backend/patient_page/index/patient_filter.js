$(function () {
    function loadPatients() {
        $.ajax({
            url: window.patientFilterUrl,

            type: "GET",

            data: {
                search: $("#search").val(),

                sex: $("#sex").val(),

                recommended: $("#recommended").val(),

                age: $("#age").val(),
            },

            success: function (patients) {
                let html = "";

                if (patients.length === 0) {
                    html += `
                        <tr>
                            <td colspan="8" class="text-center">
                                No patients found.
                            </td>
                        </tr>
                    `;
                }

                $.each(patients, function (index, patient) {
                    let image = patient.patient_image
                        ? "/uploads/images/patients/" + patient.patient_image
                        : "/uploads/images/default.jpg";

                    let badge = patient.recommended
                        ? '<span class="badge badge-success">Yes</span>'
                        : '<span class="badge badge-secondary">No</span>';

                    html += `
                    <tr>

                        <td>${index + 1}</td>

                        <td>

                            <img
                                src="${image}"
                                class="img-thumbnail"
                                width="60"
                                height="60"
                                style="object-fit:cover;">

                        </td>

                        <td><strong>${patient.name}</strong></td>

                        <td>${patient.sex}</td>

                        <td>${patient.age}</td>

                        <td>${patient.phone}</td>

                        <td>${badge}</td>

                        <td>

                            <a
                                href="/patients/${patient.id}"
                                class="btn btn-warning btn-sm">

                                <i class="fas fa-eye"></i>

                            </a>

                            <a
                                href="/patients/${patient.id}/edit"
                                class="btn btn-primary btn-sm">

                                <i class="fas fa-edit"></i>

                            </a>

                        </td>

                    </tr>
                    `;
                });

                $("#patientTable").html(html);
            },
        });
    }

    $("#search").keyup(loadPatients);

    $("#sex").change(loadPatients);

    $("#recommended").change(loadPatients);

    $("#age").keyup(loadPatients);

    $("#resetFilter").click(function () {
        $("#search").val("");

        $("#sex").val("");

        $("#recommended").val("");

        $("#age").val("");

        loadPatients();
    });
});
