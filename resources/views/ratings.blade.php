<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings</title>
</head>
<style>
    .rating input {
        display: none;
    }

    .rating label {
        color: gold;
        padding: 0px 5px;
    }

    .rating input+label {
        font-size: 30px;
        text-shadow: 1px 1px 0px blue;
        cursor: pointer;
    }

    .rating input:checked+label~label {
        color: black;
    }
</style>

<body>
    <div>
        <form action="" method="post">
            @csrf
            <table border="1"
                style="border-radius: 5px; margin: 100px auto; padding: 20px 20px; background-color: lightgray">
                <tr>
                    <td>UserID: {{$user->id}}</td>
                    <td>MovieID: {{$movID}}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span class="rating">
                            <input type="radio" id="rate1" name="rating" value="1" />
                            <label for="rate1">&#9733;</label>
                            <input type="radio" id="rate2" name="rating" value="2" />
                            <label for="rate2">&#9733;</label>
                            <input type="radio" id="rate3" name="rating" value="3" />
                            <label for="rate3">&#9733;</label>
                            <input type="radio" id="rate4" name="rating" value="4" />
                            <label for="rate4">&#9733;</label>
                            <input type="radio" id="rate5" name="rating" value="5" />
                            <label for="rate5">&#9733;</label>
                            <input type="radio" id="rate6" name="rating" value="6" />
                            <label for="rate6">&#9733;</label>
                            <input type="radio" id="rate7" name="rating" value="7" />
                            <label for="rate7">&#9733;</label>
                            <input type="radio" id="rate8" name="rating" value="8" />
                            <label for="rate8">&#9733;</label>
                            <input type="radio" id="rate9" name="rating" value="9" />
                            <label for="rate9">&#9733;</label>
                            <input type="radio" id="rate10" name="rating" value="10" />
                            <label for="rate10">&#9733;</label>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="reviews" id="reviews" value="{{$data}}" style="width: 98%; height: 50px;" placeholder="Type review here..." required="">
                        <!-- <textarea name="reviews" id="reviews" required="" placeholder="Type review here..." style="width: 98%; height: 50px"></textarea> -->
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="rateSubmit" value="Rate" style="padding: 5px 20px; cursor: pointer;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>