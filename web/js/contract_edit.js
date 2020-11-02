$(function () {

    $('#add').on('click', function () {
        let hidden = $(".hidden");
        if (hidden.length !== 0) {
            hidden[0].classList.remove('hidden');
        } else {
            alert('Нельзя добавить еще одну веху');
        }
    });

});
