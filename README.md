<h1 align="center">Contact Management Web application</h1>

<p align="center">Develop a CRUD Laravel web application to manage contacts</p>

## Application Features

The web application should have 5 features:

1 - An index page with a list of existing contacts.

2 - A page with a form for adding new contacts.

3 - A page for showing contact details.

4 - Allow editing an existing record

5 - Allow deletion of an existing record

## Considerations

A contact is an entity with 4 fields: ID, Name, Contact and email address. Name should be a string of any size greater than 5, contact should be 9 digits, and email should be a valid email.

Each row in the index page should have a link to edit the contact, and a button to delete the contact. The delete should perform a soft delete of the record, using Laravel features.

The contact details page should show all the fields of the contact plus the edit link and the delete button.

Contact and email address should be unique, two contacts cannot have the same.

Any needed database structure information or data should be added using migrations and / or seeds.

Always use Laravel native features when possible, including routes, controllers, form validation rules, soft deletes and other features.

Allow viewing the list of contacts by anyone, but the other features should only be accessed by an authenticated user. This can be a static user previously created.
