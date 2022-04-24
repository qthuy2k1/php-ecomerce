jQuery(function () {

    // Modal
    function openModal() {
        $('#modal').removeClass('hidden').addClass('flex');
    }
    function closeModal() {
        $('#modal').removeClass('flex').addClass('hidden');
    }

    $('#openSignInModal').click((e) => { 
        e.preventDefault();
        openModal();
    });

    $('#closeSignInModal').click((e) => { 
        e.preventDefault();
        closeModal();
    });


    // close modal when click on the overlay
    $('#modal').click(() => {
        closeModal();
    });


    // prevent exit modal on click
    $('#modalContainer').click((e) => {
        e.stopPropagation();
    });


    // switch between sign in and sign up
    $('#toSignIn').click(() => {
        $('#signIn').removeClass('hidden').addClass('grid');
        $('#signUp').removeClass('grid').addClass('hidden');
    });

    $('#toSignUp').click(() => {
        $('#signUp').removeClass('hidden').addClass('grid');
        $('#signIn').removeClass('grid').addClass('hidden');
    });


    // handle submit form in sign in and sign up modal
    $('#signInBtn').click((e) => {
        e.preventDefault();
        e.submit();
    })
    $('#signUpBtn').click((e) => {
        e.preventDefault();
        e.submit();
    })


    // change background and border button on click
    $('.btn-select').on('click', function() {
        if($(this).hasClass('ram')) {
            $('.btn-select.ram').removeClass('selected')
        }
        else {
            $('.btn-select.color').removeClass('selected')
        }
        $(this).addClass('selected')
    })

    $('.pagination-link').on('click', function() {
        $('.pagination-link').removeClass('selected')
        $(this).addClass('selected')
    })


    let prices = []
    if($('#cartTable')) {
        document.querySelectorAll('#cartTable tbody tr .total').forEach((element) => {
            prices.push(parseInt(element.textContent.trim().replaceAll('.', '').replace('đ', '')))
        })

        let totalAllPrice = prices.reduce((accumulator, currentValue) =>
            accumulator + currentValue
        , 0)
        
        document.querySelector('#totalAllPrice').textContent = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(totalAllPrice)
    }
})

