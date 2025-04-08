$(document).ready(function () {
    // Save diary entry
    $('#diary-form').submit(function (e) {
        e.preventDefault();
        const title = $('#title').val();
        const content = $('#content').val();

        $.ajax({
            url: 'php/save_entry.php',
            type: 'POST',
            data: { title, content },
            success: function (response) {
                alert('Entry saved!');
                loadEntries();
            }
        });
    });

    // Load diary entries
    function loadEntries() {
        $.ajax({
            url: 'php/fetch_entry.php',
            type: 'GET',
            success: function (response) {
                $('#entries').html(response);
            }
        });
    }

    loadEntries();
});
