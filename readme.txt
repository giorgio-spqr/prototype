The App folder contains the application itself, in Core folder the required classes for launching and running application.
In Public folder - css styles
In Vendor folder libraries for work (RabbitMQ, Database)

The project is built according to the Model-View-Controller pattern, also i'm using here Front Controller pattern to redirect all requests to one point - index.php
Routing is also implemented. app/routing.php defines the processing rules for each request.

In the model folder, the Partners, Applications, and Deals classes implement the DBModel interface for accessing the database.
I'm using ezSql library to simplify working with the database. Here in project i'm using RabbitMQ broker for sending e-mails, it's just to show that i've some basic experience with Rabbitmq ;)

Inside the App there is a Services folder in which we have classes for working with rabbit and email
Utils has SendOffer which implements an interface for sending deals.

You can check UML diagrams, to see structure of the project:
scheme.jpg
scheme2.jpg