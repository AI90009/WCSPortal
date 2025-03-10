'use strict';

document.addEventListener('DOMContentLoaded', function () {
    // Toastr Options
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: 'toast-top-right',
        preventDuplicates: true,
        newestOnTop: true
    };

    // Initialize DataTable
    $(document).ready(function () {
        // Destroy any existing DataTable instance
        if ($.fn.DataTable.isDataTable('.userDatatable')) {
            $('.userDatatable').DataTable().destroy();
        }

        // Reinitialize DataTable
        $('.userDatatable').DataTable({
            ajax: {//WCSPortal/managementfiles/json_data/getUser.php
                url: '../managementfiles/json_data/get_client.php',
                dataSrc: function (json) {
                    if (!json || !json.data) {
                        console.error('Invalid JSON response:', json);
                        toastr.error('Failed to load registered users.');
                        return [];
                    }
                    return json.data;
                },
                error: function (xhr) {
                    console.error('Error loading registered:', xhr.responseText);
                    toastr.error('An error occurred while fetching registered.');
                }
            },
            columns: [
                { data: 'id' },
                { data: 'recordedBy' },
                { data: 'gender' },
                { data: 'phone' },
                { data: 'usera' },
                { data: 'status' },
                { data: 'date' },
                {
                    data: null,
                    render: function (data, type, row) {
                        return `
              <div class="table-actions d-flex">
                <a class="edit-appeal me-2" href="edit-subcategories.html">
                  <img src="./../assets/img/icons/edit.svg" alt="Edit">
                </a>
                <a class="delete-appeal" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                  <img src="./../assets/img/icons/delete.svg" alt="Delete">
                </a>
              </div>
            `;
                    }
                }
            ],
            responsive: true,
            order: [[4, 'desc']],
            language: {
                sLengthMenu: '_MENU_',
                search: '',
                searchPlaceholder: 'Search Appeal'
            },
            initComplete: function (settings, json) {
                console.log('Data successfully loaded:', json);
            }
        });
    });
});