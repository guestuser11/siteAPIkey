#Site API Key Module
This module needs to alter the existing Drupal "Site Information" form. Specifics:

* A new form text field named "Site API Key" needs to be added to the "Site Information" form with the default value of “No API Key yet”.
* When this form is submitted, the value that the user entered for this field should be saved as the system variable named "siteapikey".
* A Drupal message should inform the user that the Site API Key has been saved with that value.
* When this form is visited after the "Site API Key" is saved, the field should be populated with the correct value.
* The text of the "Save configuration" button should change to "Update Configuration".
* This module also provides a URL that responds with a JSON representation of a given node with the content type "page" only if the previously submitted API Key and a node id (nid) of an appropriate node are present, otherwise it will respond with "access denied".

## Example URL

http://localhost/page_json/FOOBAR12345/17


List of resources:
https://www.drupal.org/docs/8/api/form-api/introduction-to-form-api
https://www.drupal.org/docs/8/api/configuration-api
https://api.drupal.org/api/drupal/vendor%21symfony%21http-foundation%21JsonResponse.php/8.2.x

Total time to complete task : 2.5 hr