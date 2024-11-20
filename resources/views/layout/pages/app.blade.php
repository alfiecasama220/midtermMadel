<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <!-- Bootstrap 4 CSS (CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashboard.css') }}">
</head>
<body>
    @include('layout.pages.header')
    <div class="w-100" style="height: 109vh">
        @yield('layout')
    </div>
    @include('layout.pages.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editableCells = document.querySelectorAll('[contenteditable="true"]');

            function updateCell(cell) {
                const value = parseFloat(cell.innerText.replace(/[^\d.-]/g, ''));
                    const account_id = cell.getAttribute('data-id');
                    const type = cell.getAttribute('data-type');
                    const field = cell.getAttribute('data-field');

                    

                    fetch('/update-account',  { 
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            account_id: account_id,
                            type: type, 
                            field: field,
                            value: value
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.success) {
                            // alert('success')
                            localStorage.setItem("success", "Data Edited Successfully!");
                            location.reload();
                        } else {
                            // alert('failed')
                            console.error('Server error response:', data);
                            // console.log(accountId)
                            // console.log(type)
                            // console.log(field)
                            // console.log(value)
                        }
                    })
                    .catch(error => {
                        console.error('Error updating data', error)
                        // alert('Error updating data');
                    })
            }

            editableCells.forEach(cell => {
                cell.addEventListener('keydown', function (event) {
                    if(event.key == 'Enter') {
                        event.preventDefault();

                        updateCell(cell);
                    
                    }
                    
                })
            });

            editableCells.forEach(cell => {
                cell.addEventListener('blur', function () {
                    updateCell(cell);      
                })
            });

            const message = localStorage.getItem('success');

            if(message) {
                // let responseText = document.getElementById('responseText');
                // responseText.innerHTML = message
                const div = document.createElement('div');
                div.classList.add('alert', 'alert-success', 'fade', 'show');
                div.role = 'alert';
                div.innerHTML = message

                document.getElementById('alertContainer').appendChild(div);

                localStorage.removeItem('success');


                setTimeout(function () {
                    div.remove();
                }, 3000)
            }
        })

    </script>
</html>
