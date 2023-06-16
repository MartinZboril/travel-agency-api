# Travel Agency API
The project was created for the purpose of gaining experience in creating APIs in Laravel. The project is focused on the preparation of an API for the travel agency.

## Goals
* A private (admin) endpoint to create new users. If you want, this could also be an artisan command, as you like. It will mainly be used to generate users for this exercise;
* A private (admin) endpoint to create new travels;
* A private (admin) endpoint to create new tours for a travel;
* A private (editor) endpoint to update a travel;
* A public (no auth) endpoint to get a list of paginated travels. It must return only public travels;
* A public (no auth) endpoint to get a list of paginated tours by the travel slug (e.g. all the tours of the travel foo-bar). Users can filter (search) the results by priceFrom, priceTo, dateFrom (from that startingDate) and dateTo (until that startingDate). User can sort the list by price asc and desc. They will always be sorted, after every additional user-provided filter, by startingDate asc.