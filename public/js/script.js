jQuery(function () {

    // Handle modal event
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

    $('#openSignUpModal').click((e) => { 
        e.preventDefault();
        openModal();
        $('#signUp').removeClass('hidden').addClass('grid');
        $('#signIn').removeClass('grid').addClass('hidden');
    });

    $('#closeSignInModal').click((e) => { 
        e.preventDefault();
        closeModal();
    });


    // close modal when click on the overlay
    $('#modal').click(() => {
        closeModal();
    });


    // prevent close modal on click
    $('#modalContainer').click((e) => {
        e.stopPropagation();
    });


    // switch between sign in and sign up modal
    $('#toSignIn').click(() => {
        $('#signIn').removeClass('hidden').addClass('grid');
        $('#signUp').removeClass('grid').addClass('hidden');
    });

    $('#toSignUp').click(() => {
        $('#signUp').removeClass('hidden').addClass('grid');
        $('#signIn').removeClass('grid').addClass('hidden');
    });


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


    // handle total prices in cart
    let prices = []
    if($('#cartTable').length) {
        document.querySelectorAll('#cartTable tbody tr .total').forEach((element) => {
            prices.push(parseInt(element.textContent.trim().replaceAll('.', '').replace('đ', '')))
        })

        let totalAllPrice = prices.reduce((accumulator, currentValue) =>
            accumulator + currentValue
        , 0)
        
        // Vietnamese currency formating
        document.querySelector('#totalAllPrice').textContent = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(totalAllPrice)
    }
})

