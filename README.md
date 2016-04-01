#Canadian Adventure Company - A custom Wordpress theme

This theme was created for the Canadian Adventure Company, leaders in backcountry experiences, by Cameron Fuller, Jillian Forsythe, and Nicole Grima.

The theme makes use of several custom pages designed to inform visitors about the experience at Mallard Mountain lodge.

##Header
The fixed header transitions from transparent with white text to solid white with black text, but only on the front page. This is accomplished using jQuery by adding and removing CSS classes on a scroll action and a specific height.

##Maps
All of the maps are iframes embeds from Google maps, which normally scroll-zooms when the mouse enters the frame. The issue with this is when you have a full width map you have to remove that property. We accomplished this by implementing jQuery to stop the autozoom, requiring a click action to activate the zoom feature.

##Custom Field Suite
Most of the custom pages use CFS for areas that the client may want to change. Adding a field is as simple as creating the field on the dashboard and putting in the CFS code where the client wants the text to appear.

##Angular Booking app
The Request to Book page is a single page application built using AngularJS and UI-Router.

The form aspect is fairly straight forward, using $invalid to validate classes and ng-model to capture values on inputs. Once the values are captured, the app builds a JSON object which can be used with wp-mail() to email the objects values to a chosen address.

Another interesting aspect of the app is the styling of the radio buttons and range inputs. The radio buttons are wrapped inside their own labels, and then styled using background-images, and toggled with :checked.
