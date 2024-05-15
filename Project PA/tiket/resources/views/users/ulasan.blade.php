<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews</title>
    <link rel="stylesheet" href="{{ asset('assets/css/ulasan.css')}}">
</head>

<body>
    <div class="container">
        <h1>User Reviews</h1>
        <div class="reviews">
            <div class="review">
                <div class="user-info">
                    <img src="profile-pic.jpg" alt="User Profile Picture" class="profile-pic">
                    <span class="username">John Doe</span>
                </div>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <!-- Add more reviews here -->
        </div>
    </div>
    <script>
        const stars = document.querySelectorAll('.star');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                stars.forEach(s => s.classList.remove('active'));
                star.classList.add('active');
            });
        });
    </script>
</body>

</html>