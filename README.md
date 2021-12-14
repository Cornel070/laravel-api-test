# Sunspot Tours Test

Welcome to the take home technical test, please read through this file before starting.

-   Create an API endpoint to fetch a single hotel by ID with reviews (if any).<br/>
    You do not have to provide a full CRUD API

    -   **DO** return the response as JSON.
    -   The response **SHOULD ONLY** include:

        -   The name of the hotel
        -   The hotel star rating
        -   The reviews (if any)

    -   The endpoint **should NOT** return hotels that are not flagged as `Active`</br>
        (see the section on hotel data below).

-   **DO** create database migrations and model factories for seeding dummy data.
-   **DO** configure your project to run using:
    - [Laravel Sail](https://laravel.com/docs/master/sail)
    - either PostgreSQL or MySQL
-   **DO** write tests.
-   **DO** fork this repository and add commits with your changes

## Hotels data should include

-   Hotel name
-   [Hotel star rating](https://en.wikipedia.org/wiki/Hotel_rating) (between 1-5)
-   Hotel address
-   Supplier (One of `Own`, `HotelBeds` or `SunHotels`)
-   Active - Is the hotel active or not?
-   The dates/times the record was created and last updated
-   Zero or more reviews

## Review data should include

-   Review title/heading
-   Text of the review
-   Author
-   Date of review
