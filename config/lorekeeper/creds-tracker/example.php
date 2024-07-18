<!-- This is just an example of an artist credit. Create a new file in config/lorekeeper/creds-tracker for it to register properly. Delete this file once you have created your own credits! 
~ Creator = DeviantArt Username

Put each new credit on a new line
'Art Piece Name' => 'Link To Artwork',

Below is an example of a user being credited for 2 different items.
-->

<?php

return [
    'creator' => 'T0rnPages', 
    'credits' => json_encode([
        'Item: Sprout Key' => 'https://www.jellocats.club/world/items/103',
        'Item: Sandy Bag' => 'https://www.jellocats.club/world/items/102',
    ]),
];
