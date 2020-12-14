$(function () {

    if (window.location.href.includes('update') && ($('#contract-check_date').val() == null || $('#contract-check_date').val() == '')) {
        setCheckDate();
    }

    $('#add').on('click', function () {
        let hidden = $(".hidden");
        if (hidden.length !== 0) {
            hidden[0].classList.remove('hidden');
        } else {
            alert('Нельзя добавить еще одну веху');
        }
    });

    $('#contract-start_date').on('blur', function () {
        setTimeout(setCheckDate, 1000);
    });
});

function setCheckDate() {
    let dateString = $('#contract-start_date').val();

    if (!dateString) {
        setTimeout(setCheckDate, 1000);
        return;
    }

    date = new Date();

    parts = dateString.split('-');
    date.setFullYear(parseInt(parts[0], 10));
    date.setMonth(parseInt(parts[1], 10) - 1);
    date.setDate(parseInt(parts[2], 10));

    date.setDate(date.getDate() + 1);
    let i = 1;
    while (i < 3) {
        let stringDate = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
        if (!nonworkingdays.includes(stringDate)) {
            i++;
        }
        date.setDate(date.getDate() + 1);
    }

    $('#contract-check_date').val(date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate());
}

let nonworkingdays = [
    '2020-7-1', '2020-7-4', '2020-7-5', '2020-7-11', '2020-7-12', '2020-7-18', '2020-7-19', '2020-7-25', '2020-7-26',
    '2020-8-1', '2020-8-2', '2020-8-8', '2020-8-9', '2020-8-15', '2020-8-16', '2020-8-22', '2020-8-23', '2020-8-29',
    '2020-8-30', '2020-9-5', '2020-9-6', '2020-9-12', '2020-9-13', '2020-9-19', '2020-9-20', '2020-9-26', '2020-9-27',
    '2020-10-3', '2020-10-4', '2020-10-10', '2020-10-11', '2020-10-17', '2020-10-18', '2020-10-24', '2020-10-25',
    '2020-10-31', '2020-11-1', '2020-11-4', '2020-11-7', '2020-11-8', '2020-11-14', '2020-11-15', '2020-11-21',
    '2020-11-22', '2020-11-28', '2020-11-29', '2020-12-5', '2020-12-6', '2020-12-12', '2020-12-13', '2020-12-19',
    '2020-12-20', '2020-12-26', '2020-12-27', '2021-1-1', '2021-1-2', '2021-1-3', '2021-1-4', '2021-1-5', '2021-1-6',
    '2021-1-7', '2021-1-8', '2021-1-9', '2021-1-10', '2021-1-16', '2021-1-17', '2021-1-23', '2021-1-24', '2021-1-30',
    '2021-1-31'
];
