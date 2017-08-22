<?php
/*
 * This file is part of Replum: the web widget framework.
 *
 * Copyright (c) Dennis Birkholz <dennis@birkholz.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 namespace Replum\FontAwesome;

 use \Replum\Html\HtmlElement;
 use \Replum\PageInterface;

 final class Icon extends HtmlElement
 {
    const TAG = 'i';
 
    const AVAILABLE_ICONS = [
        'glass' => true, // Glass
        'music' => true, // Music
        'search' => true, // Search
        'envelope-o' => true, // Envelope Outlined
        'heart' => true, // Heart
        'star' => true, // Star
        'star-o' => true, // Star Outlined
        'user' => true, // User
        'film' => true, // Film
        'th-large' => true, // th-large
        'th' => true, // th
        'th-list' => true, // th-list
        'check' => true, // Check
        'times' => true, // Times
        'remove' => true, // Alias of Times (times)
        'close' => true, // Alias of Times (times)
        'search-plus' => true, // Search Plus
        'search-minus' => true, // Search Minus
        'power-off' => true, // Power Off
        'signal' => true, // signal
        'cog' => true, // cog
        'gear' => true, // Alias of cog (cog)
        'trash-o' => true, // Trash Outlined
        'home' => true, // home
        'file-o' => true, // File Outlined
        'clock-o' => true, // Clock Outlined
        'road' => true, // road
        'download' => true, // Download
        'arrow-circle-o-down' => true, // Arrow Circle Outlined Down
        'arrow-circle-o-up' => true, // Arrow Circle Outlined Up
        'inbox' => true, // inbox
        'play-circle-o' => true, // Play Circle Outlined
        'repeat' => true, // Repeat
        'rotate-right' => true, // Alias of Repeat (repeat)
        'refresh' => true, // refresh
        'list-alt' => true, // list-alt
        'lock' => true, // lock
        'flag' => true, // flag
        'headphones' => true, // headphones
        'volume-off' => true, // volume-off
        'volume-down' => true, // volume-down
        'volume-up' => true, // volume-up
        'qrcode' => true, // qrcode
        'barcode' => true, // barcode
        'tag' => true, // tag
        'tags' => true, // tags
        'book' => true, // book
        'bookmark' => true, // bookmark
        'print' => true, // print
        'camera' => true, // camera
        'font' => true, // font
        'bold' => true, // bold
        'italic' => true, // italic
        'text-height' => true, // text-height
        'text-width' => true, // text-width
        'align-left' => true, // align-left
        'align-center' => true, // align-center
        'align-right' => true, // align-right
        'align-justify' => true, // align-justify
        'list' => true, // list
        'outdent' => true, // Outdent
        'dedent' => true, // Alias of Outdent (outdent)
        'indent' => true, // Indent
        'video-camera' => true, // Video Camera
        'picture-o' => true, // Picture Outlined
        'photo' => true, // Alias of Picture Outlined (picture-o)
        'image' => true, // Alias of Picture Outlined (picture-o)
        'pencil' => true, // pencil
        'map-marker' => true, // map-marker
        'adjust' => true, // adjust
        'tint' => true, // tint
        'pencil-square-o' => true, // Pencil Square Outlined
        'edit' => true, // Alias of Pencil Square Outlined (pencil-square-o)
        'share-square-o' => true, // Share Square Outlined
        'check-square-o' => true, // Check Square Outlined
        'arrows' => true, // Arrows
        'step-backward' => true, // step-backward
        'fast-backward' => true, // fast-backward
        'backward' => true, // backward
        'play' => true, // play
        'pause' => true, // pause
        'stop' => true, // stop
        'forward' => true, // forward
        'fast-forward' => true, // fast-forward
        'step-forward' => true, // step-forward
        'eject' => true, // eject
        'chevron-left' => true, // chevron-left
        'chevron-right' => true, // chevron-right
        'plus-circle' => true, // Plus Circle
        'minus-circle' => true, // Minus Circle
        'times-circle' => true, // Times Circle
        'check-circle' => true, // Check Circle
        'question-circle' => true, // Question Circle
        'info-circle' => true, // Info Circle
        'crosshairs' => true, // Crosshairs
        'times-circle-o' => true, // Times Circle Outlined
        'check-circle-o' => true, // Check Circle Outlined
        'ban' => true, // ban
        'arrow-left' => true, // arrow-left
        'arrow-right' => true, // arrow-right
        'arrow-up' => true, // arrow-up
        'arrow-down' => true, // arrow-down
        'share' => true, // Share
        'mail-forward' => true, // Alias of Share (share)
        'expand' => true, // Expand
        'compress' => true, // Compress
        'plus' => true, // plus
        'minus' => true, // minus
        'asterisk' => true, // asterisk
        'exclamation-circle' => true, // Exclamation Circle
        'gift' => true, // gift
        'leaf' => true, // leaf
        'fire' => true, // fire
        'eye' => true, // Eye
        'eye-slash' => true, // Eye Slash
        'exclamation-triangle' => true, // Exclamation Triangle
        'warning' => true, // Alias of Exclamation Triangle (exclamation-triangle)
        'plane' => true, // plane
        'calendar' => true, // calendar
        'random' => true, // random
        'comment' => true, // comment
        'magnet' => true, // magnet
        'chevron-up' => true, // chevron-up
        'chevron-down' => true, // chevron-down
        'retweet' => true, // retweet
        'shopping-cart' => true, // shopping-cart
        'folder' => true, // Folder
        'folder-open' => true, // Folder Open
        'arrows-v' => true, // Arrows Vertical
        'arrows-h' => true, // Arrows Horizontal
        'bar-chart' => true, // Bar Chart
        'bar-chart-o' => true, // Alias of Bar Chart (bar-chart)
        'twitter-square' => true, // Twitter Square
        'facebook-square' => true, // Facebook Square
        'camera-retro' => true, // camera-retro
        'key' => true, // key
        'cogs' => true, // cogs
        'gears' => true, // Alias of cogs (cogs)
        'comments' => true, // comments
        'thumbs-o-up' => true, // Thumbs Up Outlined
        'thumbs-o-down' => true, // Thumbs Down Outlined
        'star-half' => true, // star-half
        'heart-o' => true, // Heart Outlined
        'sign-out' => true, // Sign Out
        'linkedin-square' => true, // LinkedIn Square
        'thumb-tack' => true, // Thumb Tack
        'external-link' => true, // External Link
        'sign-in' => true, // Sign In
        'trophy' => true, // trophy
        'github-square' => true, // GitHub Square
        'upload' => true, // Upload
        'lemon-o' => true, // Lemon Outlined
        'phone' => true, // Phone
        'square-o' => true, // Square Outlined
        'bookmark-o' => true, // Bookmark Outlined
        'phone-square' => true, // Phone Square
        'twitter' => true, // Twitter
        'facebook' => true, // Facebook
        'facebook-f' => true, // Alias of Facebook (facebook)
        'github' => true, // GitHub
        'unlock' => true, // unlock
        'credit-card' => true, // credit-card
        'rss' => true, // rss
        'feed' => true, // Alias of rss (rss)
        'hdd-o' => true, // HDD
        'bullhorn' => true, // bullhorn
        'bell' => true, // bell
        'certificate' => true, // certificate
        'hand-o-right' => true, // Hand Outlined Right
        'hand-o-left' => true, // Hand Outlined Left
        'hand-o-up' => true, // Hand Outlined Up
        'hand-o-down' => true, // Hand Outlined Down
        'arrow-circle-left' => true, // Arrow Circle Left
        'arrow-circle-right' => true, // Arrow Circle Right
        'arrow-circle-up' => true, // Arrow Circle Up
        'arrow-circle-down' => true, // Arrow Circle Down
        'globe' => true, // Globe
        'wrench' => true, // Wrench
        'tasks' => true, // Tasks
        'filter' => true, // Filter
        'briefcase' => true, // Briefcase
        'arrows-alt' => true, // Arrows Alt
        'users' => true, // Users
        'group' => true, // Alias of Users (users)
        'link' => true, // Link
        'chain' => true, // Alias of Link (link)
        'cloud' => true, // Cloud
        'flask' => true, // Flask
        'scissors' => true, // Scissors
        'cut' => true, // Alias of Scissors (scissors)
        'files-o' => true, // Files Outlined
        'copy' => true, // Alias of Files Outlined (files-o)
        'paperclip' => true, // Paperclip
        'floppy-o' => true, // Floppy Outlined
        'save' => true, // Alias of Floppy Outlined (floppy-o)
        'square' => true, // Square
        'bars' => true, // Bars
        'navicon' => true, // Alias of Bars (bars)
        'reorder' => true, // Alias of Bars (bars)
        'list-ul' => true, // list-ul
        'list-ol' => true, // list-ol
        'strikethrough' => true, // Strikethrough
        'underline' => true, // Underline
        'table' => true, // table
        'magic' => true, // magic
        'truck' => true, // truck
        'pinterest' => true, // Pinterest
        'pinterest-square' => true, // Pinterest Square
        'google-plus-square' => true, // Google Plus Square
        'google-plus' => true, // Google Plus
        'money' => true, // Money
        'caret-down' => true, // Caret Down
        'caret-up' => true, // Caret Up
        'caret-left' => true, // Caret Left
        'caret-right' => true, // Caret Right
        'columns' => true, // Columns
        'sort' => true, // Sort
        'unsorted' => true, // Alias of Sort (sort)
        'sort-desc' => true, // Sort Descending
        'sort-down' => true, // Alias of Sort Descending (sort-desc)
        'sort-asc' => true, // Sort Ascending
        'sort-up' => true, // Alias of Sort Ascending (sort-asc)
        'envelope' => true, // Envelope
        'linkedin' => true, // LinkedIn
        'undo' => true, // Undo
        'rotate-left' => true, // Alias of Undo (undo)
        'gavel' => true, // Gavel
        'legal' => true, // Alias of Gavel (gavel)
        'tachometer' => true, // Tachometer
        'dashboard' => true, // Alias of Tachometer (tachometer)
        'comment-o' => true, // comment-o
        'comments-o' => true, // comments-o
        'bolt' => true, // Lightning Bolt
        'flash' => true, // Alias of Lightning Bolt (bolt)
        'sitemap' => true, // Sitemap
        'umbrella' => true, // Umbrella
        'clipboard' => true, // Clipboard
        'paste' => true, // Alias of Clipboard (clipboard)
        'lightbulb-o' => true, // Lightbulb Outlined
        'exchange' => true, // Exchange
        'cloud-download' => true, // Cloud Download
        'cloud-upload' => true, // Cloud Upload
        'user-md' => true, // user-md
        'stethoscope' => true, // Stethoscope
        'suitcase' => true, // Suitcase
        'bell-o' => true, // Bell Outlined
        'coffee' => true, // Coffee
        'cutlery' => true, // Cutlery
        'file-text-o' => true, // File Text Outlined
        'building-o' => true, // Building Outlined
        'hospital-o' => true, // hospital Outlined
        'ambulance' => true, // ambulance
        'medkit' => true, // medkit
        'fighter-jet' => true, // fighter-jet
        'beer' => true, // beer
        'h-square' => true, // H Square
        'plus-square' => true, // Plus Square
        'angle-double-left' => true, // Angle Double Left
        'angle-double-right' => true, // Angle Double Right
        'angle-double-up' => true, // Angle Double Up
        'angle-double-down' => true, // Angle Double Down
        'angle-left' => true, // angle-left
        'angle-right' => true, // angle-right
        'angle-up' => true, // angle-up
        'angle-down' => true, // angle-down
        'desktop' => true, // Desktop
        'laptop' => true, // Laptop
        'tablet' => true, // tablet
        'mobile' => true, // Mobile Phone
        'mobile-phone' => true, // Alias of Mobile Phone (mobile)
        'circle-o' => true, // Circle Outlined
        'quote-left' => true, // quote-left
        'quote-right' => true, // quote-right
        'spinner' => true, // Spinner
        'circle' => true, // Circle
        'reply' => true, // Reply
        'mail-reply' => true, // Alias of Reply (reply)
        'github-alt' => true, // GitHub Alt
        'folder-o' => true, // Folder Outlined
        'folder-open-o' => true, // Folder Open Outlined
        'smile-o' => true, // Smile Outlined
        'frown-o' => true, // Frown Outlined
        'meh-o' => true, // Meh Outlined
        'gamepad' => true, // Gamepad
        'keyboard-o' => true, // Keyboard Outlined
        'flag-o' => true, // Flag Outlined
        'flag-checkered' => true, // flag-checkered
        'terminal' => true, // Terminal
        'code' => true, // Code
        'reply-all' => true, // reply-all
        'mail-reply-all' => true, // Alias of reply-all (reply-all)
        'star-half-o' => true, // Star Half Outlined
        'star-half-empty' => true, // Alias of Star Half Outlined (star-half-o)
        'star-half-full' => true, // Alias of Star Half Outlined (star-half-o)
        'location-arrow' => true, // location-arrow
        'crop' => true, // crop
        'code-fork' => true, // code-fork
        'chain-broken' => true, // Chain Broken
        'unlink' => true, // Alias of Chain Broken (chain-broken)
        'question' => true, // Question
        'info' => true, // Info
        'exclamation' => true, // exclamation
        'superscript' => true, // superscript
        'subscript' => true, // subscript
        'eraser' => true, // eraser
        'puzzle-piece' => true, // Puzzle Piece
        'microphone' => true, // microphone
        'microphone-slash' => true, // Microphone Slash
        'shield' => true, // shield
        'calendar-o' => true, // calendar-o
        'fire-extinguisher' => true, // fire-extinguisher
        'rocket' => true, // rocket
        'maxcdn' => true, // MaxCDN
        'chevron-circle-left' => true, // Chevron Circle Left
        'chevron-circle-right' => true, // Chevron Circle Right
        'chevron-circle-up' => true, // Chevron Circle Up
        'chevron-circle-down' => true, // Chevron Circle Down
        'html5' => true, // HTML 5 Logo
        'css3' => true, // CSS 3 Logo
        'anchor' => true, // Anchor
        'unlock-alt' => true, // Unlock Alt
        'bullseye' => true, // Bullseye
        'ellipsis-h' => true, // Ellipsis Horizontal
        'ellipsis-v' => true, // Ellipsis Vertical
        'rss-square' => true, // RSS Square
        'play-circle' => true, // Play Circle
        'ticket' => true, // Ticket
        'minus-square' => true, // Minus Square
        'minus-square-o' => true, // Minus Square Outlined
        'level-up' => true, // Level Up
        'level-down' => true, // Level Down
        'check-square' => true, // Check Square
        'pencil-square' => true, // Pencil Square
        'external-link-square' => true, // External Link Square
        'share-square' => true, // Share Square
        'compass' => true, // Compass
        'caret-square-o-down' => true, // Caret Square Outlined Down
        'toggle-down' => true, // Alias of Caret Square Outlined Down (caret-square-o-down)
        'caret-square-o-up' => true, // Caret Square Outlined Up
        'toggle-up' => true, // Alias of Caret Square Outlined Up (caret-square-o-up)
        'caret-square-o-right' => true, // Caret Square Outlined Right
        'toggle-right' => true, // Alias of Caret Square Outlined Right (caret-square-o-right)
        'eur' => true, // Euro (EUR)
        'euro' => true, // Alias of Euro (EUR) (eur)
        'gbp' => true, // GBP
        'usd' => true, // US Dollar
        'dollar' => true, // Alias of US Dollar (usd)
        'inr' => true, // Indian Rupee (INR)
        'rupee' => true, // Alias of Indian Rupee (INR) (inr)
        'jpy' => true, // Japanese Yen (JPY)
        'cny' => true, // Alias of Japanese Yen (JPY) (jpy)
        'rmb' => true, // Alias of Japanese Yen (JPY) (jpy)
        'yen' => true, // Alias of Japanese Yen (JPY) (jpy)
        'rub' => true, // Russian Ruble (RUB)
        'ruble' => true, // Alias of Russian Ruble (RUB) (rub)
        'rouble' => true, // Alias of Russian Ruble (RUB) (rub)
        'krw' => true, // Korean Won (KRW)
        'won' => true, // Alias of Korean Won (KRW) (krw)
        'btc' => true, // Bitcoin (BTC)
        'bitcoin' => true, // Alias of Bitcoin (BTC) (btc)
        'file' => true, // File
        'file-text' => true, // File Text
        'sort-alpha-asc' => true, // Sort Alpha Ascending
        'sort-alpha-desc' => true, // Sort Alpha Descending
        'sort-amount-asc' => true, // Sort Amount Ascending
        'sort-amount-desc' => true, // Sort Amount Descending
        'sort-numeric-asc' => true, // Sort Numeric Ascending
        'sort-numeric-desc' => true, // Sort Numeric Descending
        'thumbs-up' => true, // thumbs-up
        'thumbs-down' => true, // thumbs-down
        'youtube-square' => true, // YouTube Square
        'youtube' => true, // YouTube
        'xing' => true, // Xing
        'xing-square' => true, // Xing Square
        'youtube-play' => true, // YouTube Play
        'dropbox' => true, // Dropbox
        'stack-overflow' => true, // Stack Overflow
        'instagram' => true, // Instagram
        'flickr' => true, // Flickr
        'adn' => true, // App.net
        'bitbucket' => true, // Bitbucket
        'bitbucket-square' => true, // Bitbucket Square
        'tumblr' => true, // Tumblr
        'tumblr-square' => true, // Tumblr Square
        'long-arrow-down' => true, // Long Arrow Down
        'long-arrow-up' => true, // Long Arrow Up
        'long-arrow-left' => true, // Long Arrow Left
        'long-arrow-right' => true, // Long Arrow Right
        'apple' => true, // Apple
        'windows' => true, // Windows
        'android' => true, // Android
        'linux' => true, // Linux
        'dribbble' => true, // Dribbble
        'skype' => true, // Skype
        'foursquare' => true, // Foursquare
        'trello' => true, // Trello
        'female' => true, // Female
        'male' => true, // Male
        'gratipay' => true, // Gratipay (Gittip)
        'gittip' => true, // Alias of Gratipay (Gittip) (gratipay)
        'sun-o' => true, // Sun Outlined
        'moon-o' => true, // Moon Outlined
        'archive' => true, // Archive
        'bug' => true, // Bug
        'vk' => true, // VK
        'weibo' => true, // Weibo
        'renren' => true, // Renren
        'pagelines' => true, // Pagelines
        'stack-exchange' => true, // Stack Exchange
        'arrow-circle-o-right' => true, // Arrow Circle Outlined Right
        'arrow-circle-o-left' => true, // Arrow Circle Outlined Left
        'caret-square-o-left' => true, // Caret Square Outlined Left
        'toggle-left' => true, // Alias of Caret Square Outlined Left (caret-square-o-left)
        'dot-circle-o' => true, // Dot Circle Outlined
        'wheelchair' => true, // Wheelchair
        'vimeo-square' => true, // Vimeo Square
        'try' => true, // Turkish Lira (TRY)
        'turkish-lira' => true, // Alias of Turkish Lira (TRY) (try)
        'plus-square-o' => true, // Plus Square Outlined
        'space-shuttle' => true, // Space Shuttle
        'slack' => true, // Slack Logo
        'envelope-square' => true, // Envelope Square
        'wordpress' => true, // WordPress Logo
        'openid' => true, // OpenID
        'university' => true, // University
        'institution' => true, // Alias of University (university)
        'bank' => true, // Alias of University (university)
        'graduation-cap' => true, // Graduation Cap
        'mortar-board' => true, // Alias of Graduation Cap (graduation-cap)
        'yahoo' => true, // Yahoo Logo
        'google' => true, // Google Logo
        'reddit' => true, // reddit Logo
        'reddit-square' => true, // reddit Square
        'stumbleupon-circle' => true, // StumbleUpon Circle
        'stumbleupon' => true, // StumbleUpon Logo
        'delicious' => true, // Delicious Logo
        'digg' => true, // Digg Logo
        'pied-piper-pp' => true, // Pied Piper PP Logo (Old)
        'pied-piper-alt' => true, // Pied Piper Alternate Logo
        'drupal' => true, // Drupal Logo
        'joomla' => true, // Joomla Logo
        'language' => true, // Language
        'fax' => true, // Fax
        'building' => true, // Building
        'child' => true, // Child
        'paw' => true, // Paw
        'spoon' => true, // spoon
        'cube' => true, // Cube
        'cubes' => true, // Cubes
        'behance' => true, // Behance
        'behance-square' => true, // Behance Square
        'steam' => true, // Steam
        'steam-square' => true, // Steam Square
        'recycle' => true, // Recycle
        'car' => true, // Car
        'automobile' => true, // Alias of Car (car)
        'taxi' => true, // Taxi
        'cab' => true, // Alias of Taxi (taxi)
        'tree' => true, // Tree
        'spotify' => true, // Spotify
        'deviantart' => true, // deviantART
        'soundcloud' => true, // SoundCloud
        'database' => true, // Database
        'file-pdf-o' => true, // PDF File Outlined
        'file-word-o' => true, // Word File Outlined
        'file-excel-o' => true, // Excel File Outlined
        'file-powerpoint-o' => true, // Powerpoint File Outlined
        'file-image-o' => true, // Image File Outlined
        'file-photo-o' => true, // Alias of Image File Outlined (file-image-o)
        'file-picture-o' => true, // Alias of Image File Outlined (file-image-o)
        'file-archive-o' => true, // Archive File Outlined
        'file-zip-o' => true, // Alias of Archive File Outlined (file-archive-o)
        'file-audio-o' => true, // Audio File Outlined
        'file-sound-o' => true, // Alias of Audio File Outlined (file-audio-o)
        'file-video-o' => true, // Video File Outlined
        'file-movie-o' => true, // Alias of Video File Outlined (file-video-o)
        'file-code-o' => true, // Code File Outlined
        'vine' => true, // Vine
        'codepen' => true, // Codepen
        'jsfiddle' => true, // jsFiddle
        'life-ring' => true, // Life Ring
        'life-bouy' => true, // Alias of Life Ring (life-ring)
        'life-buoy' => true, // Alias of Life Ring (life-ring)
        'life-saver' => true, // Alias of Life Ring (life-ring)
        'support' => true, // Alias of Life Ring (life-ring)
        'circle-o-notch' => true, // Circle Outlined Notched
        'rebel' => true, // Rebel Alliance
        'ra' => true, // Alias of Rebel Alliance (rebel)
        'resistance' => true, // Alias of Rebel Alliance (rebel)
        'empire' => true, // Galactic Empire
        'ge' => true, // Alias of Galactic Empire (empire)
        'git-square' => true, // Git Square
        'git' => true, // Git
        'hacker-news' => true, // Hacker News
        'y-combinator-square' => true, // Alias of Hacker News (hacker-news)
        'yc-square' => true, // Alias of Hacker News (hacker-news)
        'tencent-weibo' => true, // Tencent Weibo
        'qq' => true, // QQ
        'weixin' => true, // Weixin (WeChat)
        'wechat' => true, // Alias of Weixin (WeChat) (weixin)
        'paper-plane' => true, // Paper Plane
        'send' => true, // Alias of Paper Plane (paper-plane)
        'paper-plane-o' => true, // Paper Plane Outlined
        'send-o' => true, // Alias of Paper Plane Outlined (paper-plane-o)
        'history' => true, // History
        'circle-thin' => true, // Circle Outlined Thin
        'header' => true, // header
        'paragraph' => true, // paragraph
        'sliders' => true, // Sliders
        'share-alt' => true, // Share Alt
        'share-alt-square' => true, // Share Alt Square
        'bomb' => true, // Bomb
        'futbol-o' => true, // Futbol Outlined
        'soccer-ball-o' => true, // Alias of Futbol Outlined (futbol-o)
        'tty' => true, // TTY
        'binoculars' => true, // Binoculars
        'plug' => true, // Plug
        'slideshare' => true, // Slideshare
        'twitch' => true, // Twitch
        'yelp' => true, // Yelp
        'newspaper-o' => true, // Newspaper Outlined
        'wifi' => true, // WiFi
        'calculator' => true, // Calculator
        'paypal' => true, // Paypal
        'google-wallet' => true, // Google Wallet
        'cc-visa' => true, // Visa Credit Card
        'cc-mastercard' => true, // MasterCard Credit Card
        'cc-discover' => true, // Discover Credit Card
        'cc-amex' => true, // American Express Credit Card
        'cc-paypal' => true, // Paypal Credit Card
        'cc-stripe' => true, // Stripe Credit Card
        'bell-slash' => true, // Bell Slash
        'bell-slash-o' => true, // Bell Slash Outlined
        'trash' => true, // Trash
        'copyright' => true, // Copyright
        'at' => true, // At
        'eyedropper' => true, // Eyedropper
        'paint-brush' => true, // Paint Brush
        'birthday-cake' => true, // Birthday Cake
        'area-chart' => true, // Area Chart
        'pie-chart' => true, // Pie Chart
        'line-chart' => true, // Line Chart
        'lastfm' => true, // last.fm
        'lastfm-square' => true, // last.fm Square
        'toggle-off' => true, // Toggle Off
        'toggle-on' => true, // Toggle On
        'bicycle' => true, // Bicycle
        'bus' => true, // Bus
        'ioxhost' => true, // ioxhost
        'angellist' => true, // AngelList
        'cc' => true, // Closed Captions
        'ils' => true, // Shekel (ILS)
        'shekel' => true, // Alias of Shekel (ILS) (ils)
        'sheqel' => true, // Alias of Shekel (ILS) (ils)
        'meanpath' => true, // meanpath
        'buysellads' => true, // BuySellAds
        'connectdevelop' => true, // Connect Develop
        'dashcube' => true, // DashCube
        'forumbee' => true, // Forumbee
        'leanpub' => true, // Leanpub
        'sellsy' => true, // Sellsy
        'shirtsinbulk' => true, // Shirts in Bulk
        'simplybuilt' => true, // SimplyBuilt
        'skyatlas' => true, // skyatlas
        'cart-plus' => true, // Add to Shopping Cart
        'cart-arrow-down' => true, // Shopping Cart Arrow Down
        'diamond' => true, // Diamond
        'ship' => true, // Ship
        'user-secret' => true, // User Secret
        'motorcycle' => true, // Motorcycle
        'street-view' => true, // Street View
        'heartbeat' => true, // Heartbeat
        'venus' => true, // Venus
        'mars' => true, // Mars
        'mercury' => true, // Mercury
        'transgender' => true, // Transgender
        'intersex' => true, // Alias of Transgender (transgender)
        'transgender-alt' => true, // Transgender Alt
        'venus-double' => true, // Venus Double
        'mars-double' => true, // Mars Double
        'venus-mars' => true, // Venus Mars
        'mars-stroke' => true, // Mars Stroke
        'mars-stroke-v' => true, // Mars Stroke Vertical
        'mars-stroke-h' => true, // Mars Stroke Horizontal
        'neuter' => true, // Neuter
        'genderless' => true, // Genderless
        'facebook-official' => true, // Facebook Official
        'pinterest-p' => true, // Pinterest P
        'whatsapp' => true, // What's App
        'server' => true, // Server
        'user-plus' => true, // Add User
        'user-times' => true, // Remove User
        'bed' => true, // Bed
        'hotel' => true, // Alias of Bed (bed)
        'viacoin' => true, // Viacoin
        'train' => true, // Train
        'subway' => true, // Subway
        'medium' => true, // Medium
        'y-combinator' => true, // Y Combinator
        'yc' => true, // Alias of Y Combinator (y-combinator)
        'optin-monster' => true, // Optin Monster
        'opencart' => true, // OpenCart
        'expeditedssl' => true, // ExpeditedSSL
        'battery-full' => true, // Battery Full
        'battery-4' => true, // Alias of Battery Full (battery-full)
        'battery' => true, // Alias of Battery Full (battery-full)
        'battery-three-quarters' => true, // Battery 3/4 Full
        'battery-3' => true, // Alias of Battery 3/4 Full (battery-three-quarters)
        'battery-half' => true, // Battery 1/2 Full
        'battery-2' => true, // Alias of Battery 1/2 Full (battery-half)
        'battery-quarter' => true, // Battery 1/4 Full
        'battery-1' => true, // Alias of Battery 1/4 Full (battery-quarter)
        'battery-empty' => true, // Battery Empty
        'battery-0' => true, // Alias of Battery Empty (battery-empty)
        'mouse-pointer' => true, // Mouse Pointer
        'i-cursor' => true, // I Beam Cursor
        'object-group' => true, // Object Group
        'object-ungroup' => true, // Object Ungroup
        'sticky-note' => true, // Sticky Note
        'sticky-note-o' => true, // Sticky Note Outlined
        'cc-jcb' => true, // JCB Credit Card
        'cc-diners-club' => true, // Diner's Club Credit Card
        'clone' => true, // Clone
        'balance-scale' => true, // Balance Scale
        'hourglass-o' => true, // Hourglass Outlined
        'hourglass-start' => true, // Hourglass Start
        'hourglass-1' => true, // Alias of Hourglass Start (hourglass-start)
        'hourglass-half' => true, // Hourglass Half
        'hourglass-2' => true, // Alias of Hourglass Half (hourglass-half)
        'hourglass-end' => true, // Hourglass End
        'hourglass-3' => true, // Alias of Hourglass End (hourglass-end)
        'hourglass' => true, // Hourglass
        'hand-rock-o' => true, // Rock (Hand)
        'hand-grab-o' => true, // Alias of Rock (Hand) (hand-rock-o)
        'hand-paper-o' => true, // Paper (Hand)
        'hand-stop-o' => true, // Alias of Paper (Hand) (hand-paper-o)
        'hand-scissors-o' => true, // Scissors (Hand)
        'hand-lizard-o' => true, // Lizard (Hand)
        'hand-spock-o' => true, // Spock (Hand)
        'hand-pointer-o' => true, // Hand Pointer
        'hand-peace-o' => true, // Hand Peace
        'trademark' => true, // Trademark
        'registered' => true, // Registered Trademark
        'creative-commons' => true, // Creative Commons
        'gg' => true, // GG Currency
        'gg-circle' => true, // GG Currency Circle
        'tripadvisor' => true, // TripAdvisor
        'odnoklassniki' => true, // Odnoklassniki
        'odnoklassniki-square' => true, // Odnoklassniki Square
        'get-pocket' => true, // Get Pocket
        'wikipedia-w' => true, // Wikipedia W
        'safari' => true, // Safari
        'chrome' => true, // Chrome
        'firefox' => true, // Firefox
        'opera' => true, // Opera
        'internet-explorer' => true, // Internet-explorer
        'television' => true, // Television
        'tv' => true, // Alias of Television (television)
        'contao' => true, // Contao
        '500px' => true, // 500px
        'amazon' => true, // Amazon
        'calendar-plus-o' => true, // Calendar Plus Outlined
        'calendar-minus-o' => true, // Calendar Minus Outlined
        'calendar-times-o' => true, // Calendar Times Outlined
        'calendar-check-o' => true, // Calendar Check Outlined
        'industry' => true, // Industry
        'map-pin' => true, // Map Pin
        'map-signs' => true, // Map Signs
        'map-o' => true, // Map Outlined
        'map' => true, // Map
        'commenting' => true, // Commenting
        'commenting-o' => true, // Commenting Outlined
        'houzz' => true, // Houzz
        'vimeo' => true, // Vimeo
        'black-tie' => true, // Font Awesome Black Tie
        'fonticons' => true, // Fonticons
        'reddit-alien' => true, // reddit Alien
        'edge' => true, // Edge Browser
        'credit-card-alt' => true, // Credit Card
        'codiepie' => true, // Codie Pie
        'modx' => true, // MODX
        'fort-awesome' => true, // Fort Awesome
        'usb' => true, // USB
        'product-hunt' => true, // Product Hunt
        'mixcloud' => true, // Mixcloud
        'scribd' => true, // Scribd
        'pause-circle' => true, // Pause Circle
        'pause-circle-o' => true, // Pause Circle Outlined
        'stop-circle' => true, // Stop Circle
        'stop-circle-o' => true, // Stop Circle Outlined
        'shopping-bag' => true, // Shopping Bag
        'shopping-basket' => true, // Shopping Basket
        'hashtag' => true, // Hashtag
        'bluetooth' => true, // Bluetooth
        'bluetooth-b' => true, // Bluetooth
        'percent' => true, // Percent
        'gitlab' => true, // GitLab
        'wpbeginner' => true, // WPBeginner
        'wpforms' => true, // WPForms
        'envira' => true, // Envira Gallery
        'universal-access' => true, // Universal Access
        'wheelchair-alt' => true, // Wheelchair Alt
        'question-circle-o' => true, // Question Circle Outlined
        'blind' => true, // Blind
        'audio-description' => true, // Audio Description
        'volume-control-phone' => true, // Volume Control Phone
        'braille' => true, // Braille
        'assistive-listening-systems' => true, // Assistive Listening Systems
        'american-sign-language-interpreting' => true, // American Sign Language Interpreting
        'asl-interpreting' => true, // Alias of American Sign Language Interpreting (american-sign-language-interpreting)
        'deaf' => true, // Deaf
        'deafness' => true, // Alias of Deaf (deaf)
        'hard-of-hearing' => true, // Alias of Deaf (deaf)
        'glide' => true, // Glide
        'glide-g' => true, // Glide G
        'sign-language' => true, // Sign Language
        'signing' => true, // Alias of Sign Language (sign-language)
        'low-vision' => true, // Low Vision
        'viadeo' => true, // Viadeo
        'viadeo-square' => true, // Viadeo Square
        'snapchat' => true, // Snapchat
        'snapchat-ghost' => true, // Snapchat Ghost
        'snapchat-square' => true, // Snapchat Square
        'pied-piper' => true, // Pied Piper Logo
        'first-order' => true, // First Order
        'yoast' => true, // Yoast
        'themeisle' => true, // ThemeIsle
        'google-plus-official' => true, // Google Plus Official
        'google-plus-circle' => true, // Alias of Google Plus Official (google-plus-official)
        'font-awesome' => true, // Font Awesome
        'fa' => true, // Alias of Font Awesome (font-awesome)
        'handshake-o' => true, // Handshake Outlined
        'envelope-open' => true, // Envelope Open
        'envelope-open-o' => true, // Envelope Open Outlined
        'linode' => true, // Linode
        'address-book' => true, // Address Book
        'address-book-o' => true, // Address Book Outlined
        'address-card' => true, // Address Card
        'vcard' => true, // Alias of Address Card (address-card)
        'address-card-o' => true, // Address Card Outlined
        'vcard-o' => true, // Alias of Address Card Outlined (address-card-o)
        'user-circle' => true, // User Circle
        'user-circle-o' => true, // User Circle Outlined
        'user-o' => true, // User Outlined
        'id-badge' => true, // Identification Badge
        'id-card' => true, // Identification Card
        'drivers-license' => true, // Alias of Identification Card (id-card)
        'id-card-o' => true, // Identification Card Outlined
        'drivers-license-o' => true, // Alias of Identification Card Outlined (id-card-o)
        'quora' => true, // Quora
        'free-code-camp' => true, // Free Code Camp
        'telegram' => true, // Telegram
        'thermometer-full' => true, // Thermometer Full
        'thermometer-4' => true, // Alias of Thermometer Full (thermometer-full)
        'thermometer' => true, // Alias of Thermometer Full (thermometer-full)
        'thermometer-three-quarters' => true, // Thermometer 3/4 Full
        'thermometer-3' => true, // Alias of Thermometer 3/4 Full (thermometer-three-quarters)
        'thermometer-half' => true, // Thermometer 1/2 Full
        'thermometer-2' => true, // Alias of Thermometer 1/2 Full (thermometer-half)
        'thermometer-quarter' => true, // Thermometer 1/4 Full
        'thermometer-1' => true, // Alias of Thermometer 1/4 Full (thermometer-quarter)
        'thermometer-empty' => true, // Thermometer Empty
        'thermometer-0' => true, // Alias of Thermometer Empty (thermometer-empty)
        'shower' => true, // Shower
        'bath' => true, // Bath
        'bathtub' => true, // Alias of Bath (bath)
        's15' => true, // Alias of Bath (bath)
        'podcast' => true, // Podcast
        'window-maximize' => true, // Window Maximize
        'window-minimize' => true, // Window Minimize
        'window-restore' => true, // Window Restore
        'window-close' => true, // Window Close
        'times-rectangle' => true, // Alias of Window Close (window-close)
        'window-close-o' => true, // Window Close Outline
        'times-rectangle-o' => true, // Alias of Window Close Outline (window-close-o)
        'bandcamp' => true, // Bandcamp
        'grav' => true, // Grav
        'etsy' => true, // Etsy
        'imdb' => true, // IMDB
        'ravelry' => true, // Ravelry
        'eercast' => true, // Eercast
        'microchip' => true, // Microchip
        'snowflake-o' => true, // Snowflake Outlined
        'superpowers' => true, // Superpowers
        'wpexplorer' => true, // WPExplorer
        'meetup' => true, // Meetup
    ];

    /**
     * @string
     */
    private $icon;

    public function getIcon() : string
    {
        return $this->icon;
    }

    public function __construct(PageInterface $page, string $icon)
    {
        parent::__construct($page);

        if (!isset(self::AVAILABLE_ICONS[$icon])) {
            throw new \InvalidArgumentException('Supplied icon "' . $icon . '" does not exist in Font Awesome v4.7.0');
        }

        $this->icon = $icon;
        $this->addClass('fa');
        $this->addClass('fa-' . $icon);
    }

    /**
     * Create "glass" icon
     */
    public static function glass(PageInterface $page) : self
    {
        return new self($page, 'glass');
    }

    /**
     * Create "music" icon
     */
    public static function music(PageInterface $page) : self
    {
        return new self($page, 'music');
    }

    /**
     * Create "search" icon
     */
    public static function search(PageInterface $page) : self
    {
        return new self($page, 'search');
    }

    /**
     * Create "envelope-o" icon
     */
    public static function envelopeO(PageInterface $page) : self
    {
        return new self($page, 'envelope-o');
    }

    /**
     * Create "heart" icon
     */
    public static function heart(PageInterface $page) : self
    {
        return new self($page, 'heart');
    }

    /**
     * Create "star" icon
     */
    public static function star(PageInterface $page) : self
    {
        return new self($page, 'star');
    }

    /**
     * Create "star-o" icon
     */
    public static function starO(PageInterface $page) : self
    {
        return new self($page, 'star-o');
    }

    /**
     * Create "user" icon
     */
    public static function user(PageInterface $page) : self
    {
        return new self($page, 'user');
    }

    /**
     * Create "film" icon
     */
    public static function film(PageInterface $page) : self
    {
        return new self($page, 'film');
    }

    /**
     * Create "th-large" icon
     */
    public static function thLarge(PageInterface $page) : self
    {
        return new self($page, 'th-large');
    }

    /**
     * Create "th" icon
     */
    public static function th(PageInterface $page) : self
    {
        return new self($page, 'th');
    }

    /**
     * Create "th-list" icon
     */
    public static function thList(PageInterface $page) : self
    {
        return new self($page, 'th-list');
    }

    /**
     * Create "check" icon
     */
    public static function check(PageInterface $page) : self
    {
        return new self($page, 'check');
    }

    /**
     * Create "times" icon
     */
    public static function times(PageInterface $page) : self
    {
        return new self($page, 'times');
    }

    /**
     * Create "remove" icon
     */
    public static function remove(PageInterface $page) : self
    {
        return new self($page, 'remove');
    }

    /**
     * Create "close" icon
     */
    public static function close(PageInterface $page) : self
    {
        return new self($page, 'close');
    }

    /**
     * Create "search-plus" icon
     */
    public static function searchPlus(PageInterface $page) : self
    {
        return new self($page, 'search-plus');
    }

    /**
     * Create "search-minus" icon
     */
    public static function searchMinus(PageInterface $page) : self
    {
        return new self($page, 'search-minus');
    }

    /**
     * Create "power-off" icon
     */
    public static function powerOff(PageInterface $page) : self
    {
        return new self($page, 'power-off');
    }

    /**
     * Create "signal" icon
     */
    public static function signal(PageInterface $page) : self
    {
        return new self($page, 'signal');
    }

    /**
     * Create "cog" icon
     */
    public static function cog(PageInterface $page) : self
    {
        return new self($page, 'cog');
    }

    /**
     * Create "gear" icon
     */
    public static function gear(PageInterface $page) : self
    {
        return new self($page, 'gear');
    }

    /**
     * Create "trash-o" icon
     */
    public static function trashO(PageInterface $page) : self
    {
        return new self($page, 'trash-o');
    }

    /**
     * Create "home" icon
     */
    public static function home(PageInterface $page) : self
    {
        return new self($page, 'home');
    }

    /**
     * Create "file-o" icon
     */
    public static function fileO(PageInterface $page) : self
    {
        return new self($page, 'file-o');
    }

    /**
     * Create "clock-o" icon
     */
    public static function clockO(PageInterface $page) : self
    {
        return new self($page, 'clock-o');
    }

    /**
     * Create "road" icon
     */
    public static function road(PageInterface $page) : self
    {
        return new self($page, 'road');
    }

    /**
     * Create "download" icon
     */
    public static function download(PageInterface $page) : self
    {
        return new self($page, 'download');
    }

    /**
     * Create "arrow-circle-o-down" icon
     */
    public static function arrowCircleODown(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-o-down');
    }

    /**
     * Create "arrow-circle-o-up" icon
     */
    public static function arrowCircleOUp(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-o-up');
    }

    /**
     * Create "inbox" icon
     */
    public static function inbox(PageInterface $page) : self
    {
        return new self($page, 'inbox');
    }

    /**
     * Create "play-circle-o" icon
     */
    public static function playCircleO(PageInterface $page) : self
    {
        return new self($page, 'play-circle-o');
    }

    /**
     * Create "repeat" icon
     */
    public static function repeat(PageInterface $page) : self
    {
        return new self($page, 'repeat');
    }

    /**
     * Create "rotate-right" icon
     */
    public static function rotateRight(PageInterface $page) : self
    {
        return new self($page, 'rotate-right');
    }

    /**
     * Create "refresh" icon
     */
    public static function refresh(PageInterface $page) : self
    {
        return new self($page, 'refresh');
    }

    /**
     * Create "list-alt" icon
     */
    public static function listAlt(PageInterface $page) : self
    {
        return new self($page, 'list-alt');
    }

    /**
     * Create "lock" icon
     */
    public static function lock(PageInterface $page) : self
    {
        return new self($page, 'lock');
    }

    /**
     * Create "flag" icon
     */
    public static function flag(PageInterface $page) : self
    {
        return new self($page, 'flag');
    }

    /**
     * Create "headphones" icon
     */
    public static function headphones(PageInterface $page) : self
    {
        return new self($page, 'headphones');
    }

    /**
     * Create "volume-off" icon
     */
    public static function volumeOff(PageInterface $page) : self
    {
        return new self($page, 'volume-off');
    }

    /**
     * Create "volume-down" icon
     */
    public static function volumeDown(PageInterface $page) : self
    {
        return new self($page, 'volume-down');
    }

    /**
     * Create "volume-up" icon
     */
    public static function volumeUp(PageInterface $page) : self
    {
        return new self($page, 'volume-up');
    }

    /**
     * Create "qrcode" icon
     */
    public static function qrcode(PageInterface $page) : self
    {
        return new self($page, 'qrcode');
    }

    /**
     * Create "barcode" icon
     */
    public static function barcode(PageInterface $page) : self
    {
        return new self($page, 'barcode');
    }

    /**
     * Create "tag" icon
     */
    public static function tag(PageInterface $page) : self
    {
        return new self($page, 'tag');
    }

    /**
     * Create "tags" icon
     */
    public static function tags(PageInterface $page) : self
    {
        return new self($page, 'tags');
    }

    /**
     * Create "book" icon
     */
    public static function book(PageInterface $page) : self
    {
        return new self($page, 'book');
    }

    /**
     * Create "bookmark" icon
     */
    public static function bookmark(PageInterface $page) : self
    {
        return new self($page, 'bookmark');
    }

    /**
     * Create "print" icon
     */
    public static function printIcon(PageInterface $page) : self
    {
        return new self($page, 'print');
    }

    /**
     * Create "camera" icon
     */
    public static function camera(PageInterface $page) : self
    {
        return new self($page, 'camera');
    }

    /**
     * Create "font" icon
     */
    public static function font(PageInterface $page) : self
    {
        return new self($page, 'font');
    }

    /**
     * Create "bold" icon
     */
    public static function bold(PageInterface $page) : self
    {
        return new self($page, 'bold');
    }

    /**
     * Create "italic" icon
     */
    public static function italic(PageInterface $page) : self
    {
        return new self($page, 'italic');
    }

    /**
     * Create "text-height" icon
     */
    public static function textHeight(PageInterface $page) : self
    {
        return new self($page, 'text-height');
    }

    /**
     * Create "text-width" icon
     */
    public static function textWidth(PageInterface $page) : self
    {
        return new self($page, 'text-width');
    }

    /**
     * Create "align-left" icon
     */
    public static function alignLeft(PageInterface $page) : self
    {
        return new self($page, 'align-left');
    }

    /**
     * Create "align-center" icon
     */
    public static function alignCenter(PageInterface $page) : self
    {
        return new self($page, 'align-center');
    }

    /**
     * Create "align-right" icon
     */
    public static function alignRight(PageInterface $page) : self
    {
        return new self($page, 'align-right');
    }

    /**
     * Create "align-justify" icon
     */
    public static function alignJustify(PageInterface $page) : self
    {
        return new self($page, 'align-justify');
    }

    /**
     * Create "list" icon
     */
    public static function listIcon(PageInterface $page) : self
    {
        return new self($page, 'list');
    }

    /**
     * Create "outdent" icon
     */
    public static function outdent(PageInterface $page) : self
    {
        return new self($page, 'outdent');
    }

    /**
     * Create "dedent" icon
     */
    public static function dedent(PageInterface $page) : self
    {
        return new self($page, 'dedent');
    }

    /**
     * Create "indent" icon
     */
    public static function indent(PageInterface $page) : self
    {
        return new self($page, 'indent');
    }

    /**
     * Create "video-camera" icon
     */
    public static function videoCamera(PageInterface $page) : self
    {
        return new self($page, 'video-camera');
    }

    /**
     * Create "picture-o" icon
     */
    public static function pictureO(PageInterface $page) : self
    {
        return new self($page, 'picture-o');
    }

    /**
     * Create "photo" icon
     */
    public static function photo(PageInterface $page) : self
    {
        return new self($page, 'photo');
    }

    /**
     * Create "image" icon
     */
    public static function image(PageInterface $page) : self
    {
        return new self($page, 'image');
    }

    /**
     * Create "pencil" icon
     */
    public static function pencil(PageInterface $page) : self
    {
        return new self($page, 'pencil');
    }

    /**
     * Create "map-marker" icon
     */
    public static function mapMarker(PageInterface $page) : self
    {
        return new self($page, 'map-marker');
    }

    /**
     * Create "adjust" icon
     */
    public static function adjust(PageInterface $page) : self
    {
        return new self($page, 'adjust');
    }

    /**
     * Create "tint" icon
     */
    public static function tint(PageInterface $page) : self
    {
        return new self($page, 'tint');
    }

    /**
     * Create "pencil-square-o" icon
     */
    public static function pencilSquareO(PageInterface $page) : self
    {
        return new self($page, 'pencil-square-o');
    }

    /**
     * Create "edit" icon
     */
    public static function edit(PageInterface $page) : self
    {
        return new self($page, 'edit');
    }

    /**
     * Create "share-square-o" icon
     */
    public static function shareSquareO(PageInterface $page) : self
    {
        return new self($page, 'share-square-o');
    }

    /**
     * Create "check-square-o" icon
     */
    public static function checkSquareO(PageInterface $page) : self
    {
        return new self($page, 'check-square-o');
    }

    /**
     * Create "arrows" icon
     */
    public static function arrows(PageInterface $page) : self
    {
        return new self($page, 'arrows');
    }

    /**
     * Create "step-backward" icon
     */
    public static function stepBackward(PageInterface $page) : self
    {
        return new self($page, 'step-backward');
    }

    /**
     * Create "fast-backward" icon
     */
    public static function fastBackward(PageInterface $page) : self
    {
        return new self($page, 'fast-backward');
    }

    /**
     * Create "backward" icon
     */
    public static function backward(PageInterface $page) : self
    {
        return new self($page, 'backward');
    }

    /**
     * Create "play" icon
     */
    public static function play(PageInterface $page) : self
    {
        return new self($page, 'play');
    }

    /**
     * Create "pause" icon
     */
    public static function pause(PageInterface $page) : self
    {
        return new self($page, 'pause');
    }

    /**
     * Create "stop" icon
     */
    public static function stop(PageInterface $page) : self
    {
        return new self($page, 'stop');
    }

    /**
     * Create "forward" icon
     */
    public static function forward(PageInterface $page) : self
    {
        return new self($page, 'forward');
    }

    /**
     * Create "fast-forward" icon
     */
    public static function fastForward(PageInterface $page) : self
    {
        return new self($page, 'fast-forward');
    }

    /**
     * Create "step-forward" icon
     */
    public static function stepForward(PageInterface $page) : self
    {
        return new self($page, 'step-forward');
    }

    /**
     * Create "eject" icon
     */
    public static function eject(PageInterface $page) : self
    {
        return new self($page, 'eject');
    }

    /**
     * Create "chevron-left" icon
     */
    public static function chevronLeft(PageInterface $page) : self
    {
        return new self($page, 'chevron-left');
    }

    /**
     * Create "chevron-right" icon
     */
    public static function chevronRight(PageInterface $page) : self
    {
        return new self($page, 'chevron-right');
    }

    /**
     * Create "plus-circle" icon
     */
    public static function plusCircle(PageInterface $page) : self
    {
        return new self($page, 'plus-circle');
    }

    /**
     * Create "minus-circle" icon
     */
    public static function minusCircle(PageInterface $page) : self
    {
        return new self($page, 'minus-circle');
    }

    /**
     * Create "times-circle" icon
     */
    public static function timesCircle(PageInterface $page) : self
    {
        return new self($page, 'times-circle');
    }

    /**
     * Create "check-circle" icon
     */
    public static function checkCircle(PageInterface $page) : self
    {
        return new self($page, 'check-circle');
    }

    /**
     * Create "question-circle" icon
     */
    public static function questionCircle(PageInterface $page) : self
    {
        return new self($page, 'question-circle');
    }

    /**
     * Create "info-circle" icon
     */
    public static function infoCircle(PageInterface $page) : self
    {
        return new self($page, 'info-circle');
    }

    /**
     * Create "crosshairs" icon
     */
    public static function crosshairs(PageInterface $page) : self
    {
        return new self($page, 'crosshairs');
    }

    /**
     * Create "times-circle-o" icon
     */
    public static function timesCircleO(PageInterface $page) : self
    {
        return new self($page, 'times-circle-o');
    }

    /**
     * Create "check-circle-o" icon
     */
    public static function checkCircleO(PageInterface $page) : self
    {
        return new self($page, 'check-circle-o');
    }

    /**
     * Create "ban" icon
     */
    public static function ban(PageInterface $page) : self
    {
        return new self($page, 'ban');
    }

    /**
     * Create "arrow-left" icon
     */
    public static function arrowLeft(PageInterface $page) : self
    {
        return new self($page, 'arrow-left');
    }

    /**
     * Create "arrow-right" icon
     */
    public static function arrowRight(PageInterface $page) : self
    {
        return new self($page, 'arrow-right');
    }

    /**
     * Create "arrow-up" icon
     */
    public static function arrowUp(PageInterface $page) : self
    {
        return new self($page, 'arrow-up');
    }

    /**
     * Create "arrow-down" icon
     */
    public static function arrowDown(PageInterface $page) : self
    {
        return new self($page, 'arrow-down');
    }

    /**
     * Create "share" icon
     */
    public static function share(PageInterface $page) : self
    {
        return new self($page, 'share');
    }

    /**
     * Create "mail-forward" icon
     */
    public static function mailForward(PageInterface $page) : self
    {
        return new self($page, 'mail-forward');
    }

    /**
     * Create "expand" icon
     */
    public static function expand(PageInterface $page) : self
    {
        return new self($page, 'expand');
    }

    /**
     * Create "compress" icon
     */
    public static function compress(PageInterface $page) : self
    {
        return new self($page, 'compress');
    }

    /**
     * Create "plus" icon
     */
    public static function plus(PageInterface $page) : self
    {
        return new self($page, 'plus');
    }

    /**
     * Create "minus" icon
     */
    public static function minus(PageInterface $page) : self
    {
        return new self($page, 'minus');
    }

    /**
     * Create "asterisk" icon
     */
    public static function asterisk(PageInterface $page) : self
    {
        return new self($page, 'asterisk');
    }

    /**
     * Create "exclamation-circle" icon
     */
    public static function exclamationCircle(PageInterface $page) : self
    {
        return new self($page, 'exclamation-circle');
    }

    /**
     * Create "gift" icon
     */
    public static function gift(PageInterface $page) : self
    {
        return new self($page, 'gift');
    }

    /**
     * Create "leaf" icon
     */
    public static function leaf(PageInterface $page) : self
    {
        return new self($page, 'leaf');
    }

    /**
     * Create "fire" icon
     */
    public static function fire(PageInterface $page) : self
    {
        return new self($page, 'fire');
    }

    /**
     * Create "eye" icon
     */
    public static function eye(PageInterface $page) : self
    {
        return new self($page, 'eye');
    }

    /**
     * Create "eye-slash" icon
     */
    public static function eyeSlash(PageInterface $page) : self
    {
        return new self($page, 'eye-slash');
    }

    /**
     * Create "exclamation-triangle" icon
     */
    public static function exclamationTriangle(PageInterface $page) : self
    {
        return new self($page, 'exclamation-triangle');
    }

    /**
     * Create "warning" icon
     */
    public static function warning(PageInterface $page) : self
    {
        return new self($page, 'warning');
    }

    /**
     * Create "plane" icon
     */
    public static function plane(PageInterface $page) : self
    {
        return new self($page, 'plane');
    }

    /**
     * Create "calendar" icon
     */
    public static function calendar(PageInterface $page) : self
    {
        return new self($page, 'calendar');
    }

    /**
     * Create "random" icon
     */
    public static function random(PageInterface $page) : self
    {
        return new self($page, 'random');
    }

    /**
     * Create "comment" icon
     */
    public static function comment(PageInterface $page) : self
    {
        return new self($page, 'comment');
    }

    /**
     * Create "magnet" icon
     */
    public static function magnet(PageInterface $page) : self
    {
        return new self($page, 'magnet');
    }

    /**
     * Create "chevron-up" icon
     */
    public static function chevronUp(PageInterface $page) : self
    {
        return new self($page, 'chevron-up');
    }

    /**
     * Create "chevron-down" icon
     */
    public static function chevronDown(PageInterface $page) : self
    {
        return new self($page, 'chevron-down');
    }

    /**
     * Create "retweet" icon
     */
    public static function retweet(PageInterface $page) : self
    {
        return new self($page, 'retweet');
    }

    /**
     * Create "shopping-cart" icon
     */
    public static function shoppingCart(PageInterface $page) : self
    {
        return new self($page, 'shopping-cart');
    }

    /**
     * Create "folder" icon
     */
    public static function folder(PageInterface $page) : self
    {
        return new self($page, 'folder');
    }

    /**
     * Create "folder-open" icon
     */
    public static function folderOpen(PageInterface $page) : self
    {
        return new self($page, 'folder-open');
    }

    /**
     * Create "arrows-v" icon
     */
    public static function arrowsV(PageInterface $page) : self
    {
        return new self($page, 'arrows-v');
    }

    /**
     * Create "arrows-h" icon
     */
    public static function arrowsH(PageInterface $page) : self
    {
        return new self($page, 'arrows-h');
    }

    /**
     * Create "bar-chart" icon
     */
    public static function barChart(PageInterface $page) : self
    {
        return new self($page, 'bar-chart');
    }

    /**
     * Create "bar-chart-o" icon
     */
    public static function barChartO(PageInterface $page) : self
    {
        return new self($page, 'bar-chart-o');
    }

    /**
     * Create "twitter-square" icon
     */
    public static function twitterSquare(PageInterface $page) : self
    {
        return new self($page, 'twitter-square');
    }

    /**
     * Create "facebook-square" icon
     */
    public static function facebookSquare(PageInterface $page) : self
    {
        return new self($page, 'facebook-square');
    }

    /**
     * Create "camera-retro" icon
     */
    public static function cameraRetro(PageInterface $page) : self
    {
        return new self($page, 'camera-retro');
    }

    /**
     * Create "key" icon
     */
    public static function key(PageInterface $page) : self
    {
        return new self($page, 'key');
    }

    /**
     * Create "cogs" icon
     */
    public static function cogs(PageInterface $page) : self
    {
        return new self($page, 'cogs');
    }

    /**
     * Create "gears" icon
     */
    public static function gears(PageInterface $page) : self
    {
        return new self($page, 'gears');
    }

    /**
     * Create "comments" icon
     */
    public static function comments(PageInterface $page) : self
    {
        return new self($page, 'comments');
    }

    /**
     * Create "thumbs-o-up" icon
     */
    public static function thumbsOUp(PageInterface $page) : self
    {
        return new self($page, 'thumbs-o-up');
    }

    /**
     * Create "thumbs-o-down" icon
     */
    public static function thumbsODown(PageInterface $page) : self
    {
        return new self($page, 'thumbs-o-down');
    }

    /**
     * Create "star-half" icon
     */
    public static function starHalf(PageInterface $page) : self
    {
        return new self($page, 'star-half');
    }

    /**
     * Create "heart-o" icon
     */
    public static function heartO(PageInterface $page) : self
    {
        return new self($page, 'heart-o');
    }

    /**
     * Create "sign-out" icon
     */
    public static function signOut(PageInterface $page) : self
    {
        return new self($page, 'sign-out');
    }

    /**
     * Create "linkedin-square" icon
     */
    public static function linkedinSquare(PageInterface $page) : self
    {
        return new self($page, 'linkedin-square');
    }

    /**
     * Create "thumb-tack" icon
     */
    public static function thumbTack(PageInterface $page) : self
    {
        return new self($page, 'thumb-tack');
    }

    /**
     * Create "external-link" icon
     */
    public static function externalLink(PageInterface $page) : self
    {
        return new self($page, 'external-link');
    }

    /**
     * Create "sign-in" icon
     */
    public static function signIn(PageInterface $page) : self
    {
        return new self($page, 'sign-in');
    }

    /**
     * Create "trophy" icon
     */
    public static function trophy(PageInterface $page) : self
    {
        return new self($page, 'trophy');
    }

    /**
     * Create "github-square" icon
     */
    public static function githubSquare(PageInterface $page) : self
    {
        return new self($page, 'github-square');
    }

    /**
     * Create "upload" icon
     */
    public static function upload(PageInterface $page) : self
    {
        return new self($page, 'upload');
    }

    /**
     * Create "lemon-o" icon
     */
    public static function lemonO(PageInterface $page) : self
    {
        return new self($page, 'lemon-o');
    }

    /**
     * Create "phone" icon
     */
    public static function phone(PageInterface $page) : self
    {
        return new self($page, 'phone');
    }

    /**
     * Create "square-o" icon
     */
    public static function squareO(PageInterface $page) : self
    {
        return new self($page, 'square-o');
    }

    /**
     * Create "bookmark-o" icon
     */
    public static function bookmarkO(PageInterface $page) : self
    {
        return new self($page, 'bookmark-o');
    }

    /**
     * Create "phone-square" icon
     */
    public static function phoneSquare(PageInterface $page) : self
    {
        return new self($page, 'phone-square');
    }

    /**
     * Create "twitter" icon
     */
    public static function twitter(PageInterface $page) : self
    {
        return new self($page, 'twitter');
    }

    /**
     * Create "facebook" icon
     */
    public static function facebook(PageInterface $page) : self
    {
        return new self($page, 'facebook');
    }

    /**
     * Create "facebook-f" icon
     */
    public static function facebookF(PageInterface $page) : self
    {
        return new self($page, 'facebook-f');
    }

    /**
     * Create "github" icon
     */
    public static function github(PageInterface $page) : self
    {
        return new self($page, 'github');
    }

    /**
     * Create "unlock" icon
     */
    public static function unlock(PageInterface $page) : self
    {
        return new self($page, 'unlock');
    }

    /**
     * Create "credit-card" icon
     */
    public static function creditCard(PageInterface $page) : self
    {
        return new self($page, 'credit-card');
    }

    /**
     * Create "rss" icon
     */
    public static function rss(PageInterface $page) : self
    {
        return new self($page, 'rss');
    }

    /**
     * Create "feed" icon
     */
    public static function feed(PageInterface $page) : self
    {
        return new self($page, 'feed');
    }

    /**
     * Create "hdd-o" icon
     */
    public static function hddO(PageInterface $page) : self
    {
        return new self($page, 'hdd-o');
    }

    /**
     * Create "bullhorn" icon
     */
    public static function bullhorn(PageInterface $page) : self
    {
        return new self($page, 'bullhorn');
    }

    /**
     * Create "bell" icon
     */
    public static function bell(PageInterface $page) : self
    {
        return new self($page, 'bell');
    }

    /**
     * Create "certificate" icon
     */
    public static function certificate(PageInterface $page) : self
    {
        return new self($page, 'certificate');
    }

    /**
     * Create "hand-o-right" icon
     */
    public static function handORight(PageInterface $page) : self
    {
        return new self($page, 'hand-o-right');
    }

    /**
     * Create "hand-o-left" icon
     */
    public static function handOLeft(PageInterface $page) : self
    {
        return new self($page, 'hand-o-left');
    }

    /**
     * Create "hand-o-up" icon
     */
    public static function handOUp(PageInterface $page) : self
    {
        return new self($page, 'hand-o-up');
    }

    /**
     * Create "hand-o-down" icon
     */
    public static function handODown(PageInterface $page) : self
    {
        return new self($page, 'hand-o-down');
    }

    /**
     * Create "arrow-circle-left" icon
     */
    public static function arrowCircleLeft(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-left');
    }

    /**
     * Create "arrow-circle-right" icon
     */
    public static function arrowCircleRight(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-right');
    }

    /**
     * Create "arrow-circle-up" icon
     */
    public static function arrowCircleUp(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-up');
    }

    /**
     * Create "arrow-circle-down" icon
     */
    public static function arrowCircleDown(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-down');
    }

    /**
     * Create "globe" icon
     */
    public static function globe(PageInterface $page) : self
    {
        return new self($page, 'globe');
    }

    /**
     * Create "wrench" icon
     */
    public static function wrench(PageInterface $page) : self
    {
        return new self($page, 'wrench');
    }

    /**
     * Create "tasks" icon
     */
    public static function tasks(PageInterface $page) : self
    {
        return new self($page, 'tasks');
    }

    /**
     * Create "filter" icon
     */
    public static function filter(PageInterface $page) : self
    {
        return new self($page, 'filter');
    }

    /**
     * Create "briefcase" icon
     */
    public static function briefcase(PageInterface $page) : self
    {
        return new self($page, 'briefcase');
    }

    /**
     * Create "arrows-alt" icon
     */
    public static function arrowsAlt(PageInterface $page) : self
    {
        return new self($page, 'arrows-alt');
    }

    /**
     * Create "users" icon
     */
    public static function users(PageInterface $page) : self
    {
        return new self($page, 'users');
    }

    /**
     * Create "group" icon
     */
    public static function group(PageInterface $page) : self
    {
        return new self($page, 'group');
    }

    /**
     * Create "link" icon
     */
    public static function link(PageInterface $page) : self
    {
        return new self($page, 'link');
    }

    /**
     * Create "chain" icon
     */
    public static function chain(PageInterface $page) : self
    {
        return new self($page, 'chain');
    }

    /**
     * Create "cloud" icon
     */
    public static function cloud(PageInterface $page) : self
    {
        return new self($page, 'cloud');
    }

    /**
     * Create "flask" icon
     */
    public static function flask(PageInterface $page) : self
    {
        return new self($page, 'flask');
    }

    /**
     * Create "scissors" icon
     */
    public static function scissors(PageInterface $page) : self
    {
        return new self($page, 'scissors');
    }

    /**
     * Create "cut" icon
     */
    public static function cut(PageInterface $page) : self
    {
        return new self($page, 'cut');
    }

    /**
     * Create "files-o" icon
     */
    public static function filesO(PageInterface $page) : self
    {
        return new self($page, 'files-o');
    }

    /**
     * Create "copy" icon
     */
    public static function copy(PageInterface $page) : self
    {
        return new self($page, 'copy');
    }

    /**
     * Create "paperclip" icon
     */
    public static function paperclip(PageInterface $page) : self
    {
        return new self($page, 'paperclip');
    }

    /**
     * Create "floppy-o" icon
     */
    public static function floppyO(PageInterface $page) : self
    {
        return new self($page, 'floppy-o');
    }

    /**
     * Create "save" icon
     */
    public static function save(PageInterface $page) : self
    {
        return new self($page, 'save');
    }

    /**
     * Create "square" icon
     */
    public static function square(PageInterface $page) : self
    {
        return new self($page, 'square');
    }

    /**
     * Create "bars" icon
     */
    public static function bars(PageInterface $page) : self
    {
        return new self($page, 'bars');
    }

    /**
     * Create "navicon" icon
     */
    public static function navicon(PageInterface $page) : self
    {
        return new self($page, 'navicon');
    }

    /**
     * Create "reorder" icon
     */
    public static function reorder(PageInterface $page) : self
    {
        return new self($page, 'reorder');
    }

    /**
     * Create "list-ul" icon
     */
    public static function listUl(PageInterface $page) : self
    {
        return new self($page, 'list-ul');
    }

    /**
     * Create "list-ol" icon
     */
    public static function listOl(PageInterface $page) : self
    {
        return new self($page, 'list-ol');
    }

    /**
     * Create "strikethrough" icon
     */
    public static function strikethrough(PageInterface $page) : self
    {
        return new self($page, 'strikethrough');
    }

    /**
     * Create "underline" icon
     */
    public static function underline(PageInterface $page) : self
    {
        return new self($page, 'underline');
    }

    /**
     * Create "table" icon
     */
    public static function table(PageInterface $page) : self
    {
        return new self($page, 'table');
    }

    /**
     * Create "magic" icon
     */
    public static function magic(PageInterface $page) : self
    {
        return new self($page, 'magic');
    }

    /**
     * Create "truck" icon
     */
    public static function truck(PageInterface $page) : self
    {
        return new self($page, 'truck');
    }

    /**
     * Create "pinterest" icon
     */
    public static function pinterest(PageInterface $page) : self
    {
        return new self($page, 'pinterest');
    }

    /**
     * Create "pinterest-square" icon
     */
    public static function pinterestSquare(PageInterface $page) : self
    {
        return new self($page, 'pinterest-square');
    }

    /**
     * Create "google-plus-square" icon
     */
    public static function googlePlusSquare(PageInterface $page) : self
    {
        return new self($page, 'google-plus-square');
    }

    /**
     * Create "google-plus" icon
     */
    public static function googlePlus(PageInterface $page) : self
    {
        return new self($page, 'google-plus');
    }

    /**
     * Create "money" icon
     */
    public static function money(PageInterface $page) : self
    {
        return new self($page, 'money');
    }

    /**
     * Create "caret-down" icon
     */
    public static function caretDown(PageInterface $page) : self
    {
        return new self($page, 'caret-down');
    }

    /**
     * Create "caret-up" icon
     */
    public static function caretUp(PageInterface $page) : self
    {
        return new self($page, 'caret-up');
    }

    /**
     * Create "caret-left" icon
     */
    public static function caretLeft(PageInterface $page) : self
    {
        return new self($page, 'caret-left');
    }

    /**
     * Create "caret-right" icon
     */
    public static function caretRight(PageInterface $page) : self
    {
        return new self($page, 'caret-right');
    }

    /**
     * Create "columns" icon
     */
    public static function columns(PageInterface $page) : self
    {
        return new self($page, 'columns');
    }

    /**
     * Create "sort" icon
     */
    public static function sort(PageInterface $page) : self
    {
        return new self($page, 'sort');
    }

    /**
     * Create "unsorted" icon
     */
    public static function unsorted(PageInterface $page) : self
    {
        return new self($page, 'unsorted');
    }

    /**
     * Create "sort-desc" icon
     */
    public static function sortDesc(PageInterface $page) : self
    {
        return new self($page, 'sort-desc');
    }

    /**
     * Create "sort-down" icon
     */
    public static function sortDown(PageInterface $page) : self
    {
        return new self($page, 'sort-down');
    }

    /**
     * Create "sort-asc" icon
     */
    public static function sortAsc(PageInterface $page) : self
    {
        return new self($page, 'sort-asc');
    }

    /**
     * Create "sort-up" icon
     */
    public static function sortUp(PageInterface $page) : self
    {
        return new self($page, 'sort-up');
    }

    /**
     * Create "envelope" icon
     */
    public static function envelope(PageInterface $page) : self
    {
        return new self($page, 'envelope');
    }

    /**
     * Create "linkedin" icon
     */
    public static function linkedin(PageInterface $page) : self
    {
        return new self($page, 'linkedin');
    }

    /**
     * Create "undo" icon
     */
    public static function undo(PageInterface $page) : self
    {
        return new self($page, 'undo');
    }

    /**
     * Create "rotate-left" icon
     */
    public static function rotateLeft(PageInterface $page) : self
    {
        return new self($page, 'rotate-left');
    }

    /**
     * Create "gavel" icon
     */
    public static function gavel(PageInterface $page) : self
    {
        return new self($page, 'gavel');
    }

    /**
     * Create "legal" icon
     */
    public static function legal(PageInterface $page) : self
    {
        return new self($page, 'legal');
    }

    /**
     * Create "tachometer" icon
     */
    public static function tachometer(PageInterface $page) : self
    {
        return new self($page, 'tachometer');
    }

    /**
     * Create "dashboard" icon
     */
    public static function dashboard(PageInterface $page) : self
    {
        return new self($page, 'dashboard');
    }

    /**
     * Create "comment-o" icon
     */
    public static function commentO(PageInterface $page) : self
    {
        return new self($page, 'comment-o');
    }

    /**
     * Create "comments-o" icon
     */
    public static function commentsO(PageInterface $page) : self
    {
        return new self($page, 'comments-o');
    }

    /**
     * Create "bolt" icon
     */
    public static function bolt(PageInterface $page) : self
    {
        return new self($page, 'bolt');
    }

    /**
     * Create "flash" icon
     */
    public static function flash(PageInterface $page) : self
    {
        return new self($page, 'flash');
    }

    /**
     * Create "sitemap" icon
     */
    public static function sitemap(PageInterface $page) : self
    {
        return new self($page, 'sitemap');
    }

    /**
     * Create "umbrella" icon
     */
    public static function umbrella(PageInterface $page) : self
    {
        return new self($page, 'umbrella');
    }

    /**
     * Create "clipboard" icon
     */
    public static function clipboard(PageInterface $page) : self
    {
        return new self($page, 'clipboard');
    }

    /**
     * Create "paste" icon
     */
    public static function paste(PageInterface $page) : self
    {
        return new self($page, 'paste');
    }

    /**
     * Create "lightbulb-o" icon
     */
    public static function lightbulbO(PageInterface $page) : self
    {
        return new self($page, 'lightbulb-o');
    }

    /**
     * Create "exchange" icon
     */
    public static function exchange(PageInterface $page) : self
    {
        return new self($page, 'exchange');
    }

    /**
     * Create "cloud-download" icon
     */
    public static function cloudDownload(PageInterface $page) : self
    {
        return new self($page, 'cloud-download');
    }

    /**
     * Create "cloud-upload" icon
     */
    public static function cloudUpload(PageInterface $page) : self
    {
        return new self($page, 'cloud-upload');
    }

    /**
     * Create "user-md" icon
     */
    public static function userMd(PageInterface $page) : self
    {
        return new self($page, 'user-md');
    }

    /**
     * Create "stethoscope" icon
     */
    public static function stethoscope(PageInterface $page) : self
    {
        return new self($page, 'stethoscope');
    }

    /**
     * Create "suitcase" icon
     */
    public static function suitcase(PageInterface $page) : self
    {
        return new self($page, 'suitcase');
    }

    /**
     * Create "bell-o" icon
     */
    public static function bellO(PageInterface $page) : self
    {
        return new self($page, 'bell-o');
    }

    /**
     * Create "coffee" icon
     */
    public static function coffee(PageInterface $page) : self
    {
        return new self($page, 'coffee');
    }

    /**
     * Create "cutlery" icon
     */
    public static function cutlery(PageInterface $page) : self
    {
        return new self($page, 'cutlery');
    }

    /**
     * Create "file-text-o" icon
     */
    public static function fileTextO(PageInterface $page) : self
    {
        return new self($page, 'file-text-o');
    }

    /**
     * Create "building-o" icon
     */
    public static function buildingO(PageInterface $page) : self
    {
        return new self($page, 'building-o');
    }

    /**
     * Create "hospital-o" icon
     */
    public static function hospitalO(PageInterface $page) : self
    {
        return new self($page, 'hospital-o');
    }

    /**
     * Create "ambulance" icon
     */
    public static function ambulance(PageInterface $page) : self
    {
        return new self($page, 'ambulance');
    }

    /**
     * Create "medkit" icon
     */
    public static function medkit(PageInterface $page) : self
    {
        return new self($page, 'medkit');
    }

    /**
     * Create "fighter-jet" icon
     */
    public static function fighterJet(PageInterface $page) : self
    {
        return new self($page, 'fighter-jet');
    }

    /**
     * Create "beer" icon
     */
    public static function beer(PageInterface $page) : self
    {
        return new self($page, 'beer');
    }

    /**
     * Create "h-square" icon
     */
    public static function hSquare(PageInterface $page) : self
    {
        return new self($page, 'h-square');
    }

    /**
     * Create "plus-square" icon
     */
    public static function plusSquare(PageInterface $page) : self
    {
        return new self($page, 'plus-square');
    }

    /**
     * Create "angle-double-left" icon
     */
    public static function angleDoubleLeft(PageInterface $page) : self
    {
        return new self($page, 'angle-double-left');
    }

    /**
     * Create "angle-double-right" icon
     */
    public static function angleDoubleRight(PageInterface $page) : self
    {
        return new self($page, 'angle-double-right');
    }

    /**
     * Create "angle-double-up" icon
     */
    public static function angleDoubleUp(PageInterface $page) : self
    {
        return new self($page, 'angle-double-up');
    }

    /**
     * Create "angle-double-down" icon
     */
    public static function angleDoubleDown(PageInterface $page) : self
    {
        return new self($page, 'angle-double-down');
    }

    /**
     * Create "angle-left" icon
     */
    public static function angleLeft(PageInterface $page) : self
    {
        return new self($page, 'angle-left');
    }

    /**
     * Create "angle-right" icon
     */
    public static function angleRight(PageInterface $page) : self
    {
        return new self($page, 'angle-right');
    }

    /**
     * Create "angle-up" icon
     */
    public static function angleUp(PageInterface $page) : self
    {
        return new self($page, 'angle-up');
    }

    /**
     * Create "angle-down" icon
     */
    public static function angleDown(PageInterface $page) : self
    {
        return new self($page, 'angle-down');
    }

    /**
     * Create "desktop" icon
     */
    public static function desktop(PageInterface $page) : self
    {
        return new self($page, 'desktop');
    }

    /**
     * Create "laptop" icon
     */
    public static function laptop(PageInterface $page) : self
    {
        return new self($page, 'laptop');
    }

    /**
     * Create "tablet" icon
     */
    public static function tablet(PageInterface $page) : self
    {
        return new self($page, 'tablet');
    }

    /**
     * Create "mobile" icon
     */
    public static function mobile(PageInterface $page) : self
    {
        return new self($page, 'mobile');
    }

    /**
     * Create "mobile-phone" icon
     */
    public static function mobilePhone(PageInterface $page) : self
    {
        return new self($page, 'mobile-phone');
    }

    /**
     * Create "circle-o" icon
     */
    public static function circleO(PageInterface $page) : self
    {
        return new self($page, 'circle-o');
    }

    /**
     * Create "quote-left" icon
     */
    public static function quoteLeft(PageInterface $page) : self
    {
        return new self($page, 'quote-left');
    }

    /**
     * Create "quote-right" icon
     */
    public static function quoteRight(PageInterface $page) : self
    {
        return new self($page, 'quote-right');
    }

    /**
     * Create "spinner" icon
     */
    public static function spinner(PageInterface $page) : self
    {
        return new self($page, 'spinner');
    }

    /**
     * Create "circle" icon
     */
    public static function circle(PageInterface $page) : self
    {
        return new self($page, 'circle');
    }

    /**
     * Create "reply" icon
     */
    public static function reply(PageInterface $page) : self
    {
        return new self($page, 'reply');
    }

    /**
     * Create "mail-reply" icon
     */
    public static function mailReply(PageInterface $page) : self
    {
        return new self($page, 'mail-reply');
    }

    /**
     * Create "github-alt" icon
     */
    public static function githubAlt(PageInterface $page) : self
    {
        return new self($page, 'github-alt');
    }

    /**
     * Create "folder-o" icon
     */
    public static function folderO(PageInterface $page) : self
    {
        return new self($page, 'folder-o');
    }

    /**
     * Create "folder-open-o" icon
     */
    public static function folderOpenO(PageInterface $page) : self
    {
        return new self($page, 'folder-open-o');
    }

    /**
     * Create "smile-o" icon
     */
    public static function smileO(PageInterface $page) : self
    {
        return new self($page, 'smile-o');
    }

    /**
     * Create "frown-o" icon
     */
    public static function frownO(PageInterface $page) : self
    {
        return new self($page, 'frown-o');
    }

    /**
     * Create "meh-o" icon
     */
    public static function mehO(PageInterface $page) : self
    {
        return new self($page, 'meh-o');
    }

    /**
     * Create "gamepad" icon
     */
    public static function gamepad(PageInterface $page) : self
    {
        return new self($page, 'gamepad');
    }

    /**
     * Create "keyboard-o" icon
     */
    public static function keyboardO(PageInterface $page) : self
    {
        return new self($page, 'keyboard-o');
    }

    /**
     * Create "flag-o" icon
     */
    public static function flagO(PageInterface $page) : self
    {
        return new self($page, 'flag-o');
    }

    /**
     * Create "flag-checkered" icon
     */
    public static function flagCheckered(PageInterface $page) : self
    {
        return new self($page, 'flag-checkered');
    }

    /**
     * Create "terminal" icon
     */
    public static function terminal(PageInterface $page) : self
    {
        return new self($page, 'terminal');
    }

    /**
     * Create "code" icon
     */
    public static function code(PageInterface $page) : self
    {
        return new self($page, 'code');
    }

    /**
     * Create "reply-all" icon
     */
    public static function replyAll(PageInterface $page) : self
    {
        return new self($page, 'reply-all');
    }

    /**
     * Create "mail-reply-all" icon
     */
    public static function mailReplyAll(PageInterface $page) : self
    {
        return new self($page, 'mail-reply-all');
    }

    /**
     * Create "star-half-o" icon
     */
    public static function starHalfO(PageInterface $page) : self
    {
        return new self($page, 'star-half-o');
    }

    /**
     * Create "star-half-empty" icon
     */
    public static function starHalfEmpty(PageInterface $page) : self
    {
        return new self($page, 'star-half-empty');
    }

    /**
     * Create "star-half-full" icon
     */
    public static function starHalfFull(PageInterface $page) : self
    {
        return new self($page, 'star-half-full');
    }

    /**
     * Create "location-arrow" icon
     */
    public static function locationArrow(PageInterface $page) : self
    {
        return new self($page, 'location-arrow');
    }

    /**
     * Create "crop" icon
     */
    public static function crop(PageInterface $page) : self
    {
        return new self($page, 'crop');
    }

    /**
     * Create "code-fork" icon
     */
    public static function codeFork(PageInterface $page) : self
    {
        return new self($page, 'code-fork');
    }

    /**
     * Create "chain-broken" icon
     */
    public static function chainBroken(PageInterface $page) : self
    {
        return new self($page, 'chain-broken');
    }

    /**
     * Create "unlink" icon
     */
    public static function unlink(PageInterface $page) : self
    {
        return new self($page, 'unlink');
    }

    /**
     * Create "question" icon
     */
    public static function question(PageInterface $page) : self
    {
        return new self($page, 'question');
    }

    /**
     * Create "info" icon
     */
    public static function info(PageInterface $page) : self
    {
        return new self($page, 'info');
    }

    /**
     * Create "exclamation" icon
     */
    public static function exclamation(PageInterface $page) : self
    {
        return new self($page, 'exclamation');
    }

    /**
     * Create "superscript" icon
     */
    public static function superscript(PageInterface $page) : self
    {
        return new self($page, 'superscript');
    }

    /**
     * Create "subscript" icon
     */
    public static function subscript(PageInterface $page) : self
    {
        return new self($page, 'subscript');
    }

    /**
     * Create "eraser" icon
     */
    public static function eraser(PageInterface $page) : self
    {
        return new self($page, 'eraser');
    }

    /**
     * Create "puzzle-piece" icon
     */
    public static function puzzlePiece(PageInterface $page) : self
    {
        return new self($page, 'puzzle-piece');
    }

    /**
     * Create "microphone" icon
     */
    public static function microphone(PageInterface $page) : self
    {
        return new self($page, 'microphone');
    }

    /**
     * Create "microphone-slash" icon
     */
    public static function microphoneSlash(PageInterface $page) : self
    {
        return new self($page, 'microphone-slash');
    }

    /**
     * Create "shield" icon
     */
    public static function shield(PageInterface $page) : self
    {
        return new self($page, 'shield');
    }

    /**
     * Create "calendar-o" icon
     */
    public static function calendarO(PageInterface $page) : self
    {
        return new self($page, 'calendar-o');
    }

    /**
     * Create "fire-extinguisher" icon
     */
    public static function fireExtinguisher(PageInterface $page) : self
    {
        return new self($page, 'fire-extinguisher');
    }

    /**
     * Create "rocket" icon
     */
    public static function rocket(PageInterface $page) : self
    {
        return new self($page, 'rocket');
    }

    /**
     * Create "maxcdn" icon
     */
    public static function maxcdn(PageInterface $page) : self
    {
        return new self($page, 'maxcdn');
    }

    /**
     * Create "chevron-circle-left" icon
     */
    public static function chevronCircleLeft(PageInterface $page) : self
    {
        return new self($page, 'chevron-circle-left');
    }

    /**
     * Create "chevron-circle-right" icon
     */
    public static function chevronCircleRight(PageInterface $page) : self
    {
        return new self($page, 'chevron-circle-right');
    }

    /**
     * Create "chevron-circle-up" icon
     */
    public static function chevronCircleUp(PageInterface $page) : self
    {
        return new self($page, 'chevron-circle-up');
    }

    /**
     * Create "chevron-circle-down" icon
     */
    public static function chevronCircleDown(PageInterface $page) : self
    {
        return new self($page, 'chevron-circle-down');
    }

    /**
     * Create "html5" icon
     */
    public static function html5(PageInterface $page) : self
    {
        return new self($page, 'html5');
    }

    /**
     * Create "css3" icon
     */
    public static function css3(PageInterface $page) : self
    {
        return new self($page, 'css3');
    }

    /**
     * Create "anchor" icon
     */
    public static function anchor(PageInterface $page) : self
    {
        return new self($page, 'anchor');
    }

    /**
     * Create "unlock-alt" icon
     */
    public static function unlockAlt(PageInterface $page) : self
    {
        return new self($page, 'unlock-alt');
    }

    /**
     * Create "bullseye" icon
     */
    public static function bullseye(PageInterface $page) : self
    {
        return new self($page, 'bullseye');
    }

    /**
     * Create "ellipsis-h" icon
     */
    public static function ellipsisH(PageInterface $page) : self
    {
        return new self($page, 'ellipsis-h');
    }

    /**
     * Create "ellipsis-v" icon
     */
    public static function ellipsisV(PageInterface $page) : self
    {
        return new self($page, 'ellipsis-v');
    }

    /**
     * Create "rss-square" icon
     */
    public static function rssSquare(PageInterface $page) : self
    {
        return new self($page, 'rss-square');
    }

    /**
     * Create "play-circle" icon
     */
    public static function playCircle(PageInterface $page) : self
    {
        return new self($page, 'play-circle');
    }

    /**
     * Create "ticket" icon
     */
    public static function ticket(PageInterface $page) : self
    {
        return new self($page, 'ticket');
    }

    /**
     * Create "minus-square" icon
     */
    public static function minusSquare(PageInterface $page) : self
    {
        return new self($page, 'minus-square');
    }

    /**
     * Create "minus-square-o" icon
     */
    public static function minusSquareO(PageInterface $page) : self
    {
        return new self($page, 'minus-square-o');
    }

    /**
     * Create "level-up" icon
     */
    public static function levelUp(PageInterface $page) : self
    {
        return new self($page, 'level-up');
    }

    /**
     * Create "level-down" icon
     */
    public static function levelDown(PageInterface $page) : self
    {
        return new self($page, 'level-down');
    }

    /**
     * Create "check-square" icon
     */
    public static function checkSquare(PageInterface $page) : self
    {
        return new self($page, 'check-square');
    }

    /**
     * Create "pencil-square" icon
     */
    public static function pencilSquare(PageInterface $page) : self
    {
        return new self($page, 'pencil-square');
    }

    /**
     * Create "external-link-square" icon
     */
    public static function externalLinkSquare(PageInterface $page) : self
    {
        return new self($page, 'external-link-square');
    }

    /**
     * Create "share-square" icon
     */
    public static function shareSquare(PageInterface $page) : self
    {
        return new self($page, 'share-square');
    }

    /**
     * Create "compass" icon
     */
    public static function compass(PageInterface $page) : self
    {
        return new self($page, 'compass');
    }

    /**
     * Create "caret-square-o-down" icon
     */
    public static function caretSquareODown(PageInterface $page) : self
    {
        return new self($page, 'caret-square-o-down');
    }

    /**
     * Create "toggle-down" icon
     */
    public static function toggleDown(PageInterface $page) : self
    {
        return new self($page, 'toggle-down');
    }

    /**
     * Create "caret-square-o-up" icon
     */
    public static function caretSquareOUp(PageInterface $page) : self
    {
        return new self($page, 'caret-square-o-up');
    }

    /**
     * Create "toggle-up" icon
     */
    public static function toggleUp(PageInterface $page) : self
    {
        return new self($page, 'toggle-up');
    }

    /**
     * Create "caret-square-o-right" icon
     */
    public static function caretSquareORight(PageInterface $page) : self
    {
        return new self($page, 'caret-square-o-right');
    }

    /**
     * Create "toggle-right" icon
     */
    public static function toggleRight(PageInterface $page) : self
    {
        return new self($page, 'toggle-right');
    }

    /**
     * Create "eur" icon
     */
    public static function eur(PageInterface $page) : self
    {
        return new self($page, 'eur');
    }

    /**
     * Create "euro" icon
     */
    public static function euro(PageInterface $page) : self
    {
        return new self($page, 'euro');
    }

    /**
     * Create "gbp" icon
     */
    public static function gbp(PageInterface $page) : self
    {
        return new self($page, 'gbp');
    }

    /**
     * Create "usd" icon
     */
    public static function usd(PageInterface $page) : self
    {
        return new self($page, 'usd');
    }

    /**
     * Create "dollar" icon
     */
    public static function dollar(PageInterface $page) : self
    {
        return new self($page, 'dollar');
    }

    /**
     * Create "inr" icon
     */
    public static function inr(PageInterface $page) : self
    {
        return new self($page, 'inr');
    }

    /**
     * Create "rupee" icon
     */
    public static function rupee(PageInterface $page) : self
    {
        return new self($page, 'rupee');
    }

    /**
     * Create "jpy" icon
     */
    public static function jpy(PageInterface $page) : self
    {
        return new self($page, 'jpy');
    }

    /**
     * Create "cny" icon
     */
    public static function cny(PageInterface $page) : self
    {
        return new self($page, 'cny');
    }

    /**
     * Create "rmb" icon
     */
    public static function rmb(PageInterface $page) : self
    {
        return new self($page, 'rmb');
    }

    /**
     * Create "yen" icon
     */
    public static function yen(PageInterface $page) : self
    {
        return new self($page, 'yen');
    }

    /**
     * Create "rub" icon
     */
    public static function rub(PageInterface $page) : self
    {
        return new self($page, 'rub');
    }

    /**
     * Create "ruble" icon
     */
    public static function ruble(PageInterface $page) : self
    {
        return new self($page, 'ruble');
    }

    /**
     * Create "rouble" icon
     */
    public static function rouble(PageInterface $page) : self
    {
        return new self($page, 'rouble');
    }

    /**
     * Create "krw" icon
     */
    public static function krw(PageInterface $page) : self
    {
        return new self($page, 'krw');
    }

    /**
     * Create "won" icon
     */
    public static function won(PageInterface $page) : self
    {
        return new self($page, 'won');
    }

    /**
     * Create "btc" icon
     */
    public static function btc(PageInterface $page) : self
    {
        return new self($page, 'btc');
    }

    /**
     * Create "bitcoin" icon
     */
    public static function bitcoin(PageInterface $page) : self
    {
        return new self($page, 'bitcoin');
    }

    /**
     * Create "file" icon
     */
    public static function file(PageInterface $page) : self
    {
        return new self($page, 'file');
    }

    /**
     * Create "file-text" icon
     */
    public static function fileText(PageInterface $page) : self
    {
        return new self($page, 'file-text');
    }

    /**
     * Create "sort-alpha-asc" icon
     */
    public static function sortAlphaAsc(PageInterface $page) : self
    {
        return new self($page, 'sort-alpha-asc');
    }

    /**
     * Create "sort-alpha-desc" icon
     */
    public static function sortAlphaDesc(PageInterface $page) : self
    {
        return new self($page, 'sort-alpha-desc');
    }

    /**
     * Create "sort-amount-asc" icon
     */
    public static function sortAmountAsc(PageInterface $page) : self
    {
        return new self($page, 'sort-amount-asc');
    }

    /**
     * Create "sort-amount-desc" icon
     */
    public static function sortAmountDesc(PageInterface $page) : self
    {
        return new self($page, 'sort-amount-desc');
    }

    /**
     * Create "sort-numeric-asc" icon
     */
    public static function sortNumericAsc(PageInterface $page) : self
    {
        return new self($page, 'sort-numeric-asc');
    }

    /**
     * Create "sort-numeric-desc" icon
     */
    public static function sortNumericDesc(PageInterface $page) : self
    {
        return new self($page, 'sort-numeric-desc');
    }

    /**
     * Create "thumbs-up" icon
     */
    public static function thumbsUp(PageInterface $page) : self
    {
        return new self($page, 'thumbs-up');
    }

    /**
     * Create "thumbs-down" icon
     */
    public static function thumbsDown(PageInterface $page) : self
    {
        return new self($page, 'thumbs-down');
    }

    /**
     * Create "youtube-square" icon
     */
    public static function youtubeSquare(PageInterface $page) : self
    {
        return new self($page, 'youtube-square');
    }

    /**
     * Create "youtube" icon
     */
    public static function youtube(PageInterface $page) : self
    {
        return new self($page, 'youtube');
    }

    /**
     * Create "xing" icon
     */
    public static function xing(PageInterface $page) : self
    {
        return new self($page, 'xing');
    }

    /**
     * Create "xing-square" icon
     */
    public static function xingSquare(PageInterface $page) : self
    {
        return new self($page, 'xing-square');
    }

    /**
     * Create "youtube-play" icon
     */
    public static function youtubePlay(PageInterface $page) : self
    {
        return new self($page, 'youtube-play');
    }

    /**
     * Create "dropbox" icon
     */
    public static function dropbox(PageInterface $page) : self
    {
        return new self($page, 'dropbox');
    }

    /**
     * Create "stack-overflow" icon
     */
    public static function stackOverflow(PageInterface $page) : self
    {
        return new self($page, 'stack-overflow');
    }

    /**
     * Create "instagram" icon
     */
    public static function instagram(PageInterface $page) : self
    {
        return new self($page, 'instagram');
    }

    /**
     * Create "flickr" icon
     */
    public static function flickr(PageInterface $page) : self
    {
        return new self($page, 'flickr');
    }

    /**
     * Create "adn" icon
     */
    public static function adn(PageInterface $page) : self
    {
        return new self($page, 'adn');
    }

    /**
     * Create "bitbucket" icon
     */
    public static function bitbucket(PageInterface $page) : self
    {
        return new self($page, 'bitbucket');
    }

    /**
     * Create "bitbucket-square" icon
     */
    public static function bitbucketSquare(PageInterface $page) : self
    {
        return new self($page, 'bitbucket-square');
    }

    /**
     * Create "tumblr" icon
     */
    public static function tumblr(PageInterface $page) : self
    {
        return new self($page, 'tumblr');
    }

    /**
     * Create "tumblr-square" icon
     */
    public static function tumblrSquare(PageInterface $page) : self
    {
        return new self($page, 'tumblr-square');
    }

    /**
     * Create "long-arrow-down" icon
     */
    public static function longArrowDown(PageInterface $page) : self
    {
        return new self($page, 'long-arrow-down');
    }

    /**
     * Create "long-arrow-up" icon
     */
    public static function longArrowUp(PageInterface $page) : self
    {
        return new self($page, 'long-arrow-up');
    }

    /**
     * Create "long-arrow-left" icon
     */
    public static function longArrowLeft(PageInterface $page) : self
    {
        return new self($page, 'long-arrow-left');
    }

    /**
     * Create "long-arrow-right" icon
     */
    public static function longArrowRight(PageInterface $page) : self
    {
        return new self($page, 'long-arrow-right');
    }

    /**
     * Create "apple" icon
     */
    public static function apple(PageInterface $page) : self
    {
        return new self($page, 'apple');
    }

    /**
     * Create "windows" icon
     */
    public static function windows(PageInterface $page) : self
    {
        return new self($page, 'windows');
    }

    /**
     * Create "android" icon
     */
    public static function android(PageInterface $page) : self
    {
        return new self($page, 'android');
    }

    /**
     * Create "linux" icon
     */
    public static function linux(PageInterface $page) : self
    {
        return new self($page, 'linux');
    }

    /**
     * Create "dribbble" icon
     */
    public static function dribbble(PageInterface $page) : self
    {
        return new self($page, 'dribbble');
    }

    /**
     * Create "skype" icon
     */
    public static function skype(PageInterface $page) : self
    {
        return new self($page, 'skype');
    }

    /**
     * Create "foursquare" icon
     */
    public static function foursquare(PageInterface $page) : self
    {
        return new self($page, 'foursquare');
    }

    /**
     * Create "trello" icon
     */
    public static function trello(PageInterface $page) : self
    {
        return new self($page, 'trello');
    }

    /**
     * Create "female" icon
     */
    public static function female(PageInterface $page) : self
    {
        return new self($page, 'female');
    }

    /**
     * Create "male" icon
     */
    public static function male(PageInterface $page) : self
    {
        return new self($page, 'male');
    }

    /**
     * Create "gratipay" icon
     */
    public static function gratipay(PageInterface $page) : self
    {
        return new self($page, 'gratipay');
    }

    /**
     * Create "gittip" icon
     */
    public static function gittip(PageInterface $page) : self
    {
        return new self($page, 'gittip');
    }

    /**
     * Create "sun-o" icon
     */
    public static function sunO(PageInterface $page) : self
    {
        return new self($page, 'sun-o');
    }

    /**
     * Create "moon-o" icon
     */
    public static function moonO(PageInterface $page) : self
    {
        return new self($page, 'moon-o');
    }

    /**
     * Create "archive" icon
     */
    public static function archive(PageInterface $page) : self
    {
        return new self($page, 'archive');
    }

    /**
     * Create "bug" icon
     */
    public static function bug(PageInterface $page) : self
    {
        return new self($page, 'bug');
    }

    /**
     * Create "vk" icon
     */
    public static function vk(PageInterface $page) : self
    {
        return new self($page, 'vk');
    }

    /**
     * Create "weibo" icon
     */
    public static function weibo(PageInterface $page) : self
    {
        return new self($page, 'weibo');
    }

    /**
     * Create "renren" icon
     */
    public static function renren(PageInterface $page) : self
    {
        return new self($page, 'renren');
    }

    /**
     * Create "pagelines" icon
     */
    public static function pagelines(PageInterface $page) : self
    {
        return new self($page, 'pagelines');
    }

    /**
     * Create "stack-exchange" icon
     */
    public static function stackExchange(PageInterface $page) : self
    {
        return new self($page, 'stack-exchange');
    }

    /**
     * Create "arrow-circle-o-right" icon
     */
    public static function arrowCircleORight(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-o-right');
    }

    /**
     * Create "arrow-circle-o-left" icon
     */
    public static function arrowCircleOLeft(PageInterface $page) : self
    {
        return new self($page, 'arrow-circle-o-left');
    }

    /**
     * Create "caret-square-o-left" icon
     */
    public static function caretSquareOLeft(PageInterface $page) : self
    {
        return new self($page, 'caret-square-o-left');
    }

    /**
     * Create "toggle-left" icon
     */
    public static function toggleLeft(PageInterface $page) : self
    {
        return new self($page, 'toggle-left');
    }

    /**
     * Create "dot-circle-o" icon
     */
    public static function dotCircleO(PageInterface $page) : self
    {
        return new self($page, 'dot-circle-o');
    }

    /**
     * Create "wheelchair" icon
     */
    public static function wheelchair(PageInterface $page) : self
    {
        return new self($page, 'wheelchair');
    }

    /**
     * Create "vimeo-square" icon
     */
    public static function vimeoSquare(PageInterface $page) : self
    {
        return new self($page, 'vimeo-square');
    }

    /**
     * Create "try" icon
     */
    public static function tryIcon(PageInterface $page) : self
    {
        return new self($page, 'try');
    }

    /**
     * Create "turkish-lira" icon
     */
    public static function turkishLira(PageInterface $page) : self
    {
        return new self($page, 'turkish-lira');
    }

    /**
     * Create "plus-square-o" icon
     */
    public static function plusSquareO(PageInterface $page) : self
    {
        return new self($page, 'plus-square-o');
    }

    /**
     * Create "space-shuttle" icon
     */
    public static function spaceShuttle(PageInterface $page) : self
    {
        return new self($page, 'space-shuttle');
    }

    /**
     * Create "slack" icon
     */
    public static function slack(PageInterface $page) : self
    {
        return new self($page, 'slack');
    }

    /**
     * Create "envelope-square" icon
     */
    public static function envelopeSquare(PageInterface $page) : self
    {
        return new self($page, 'envelope-square');
    }

    /**
     * Create "wordpress" icon
     */
    public static function wordpress(PageInterface $page) : self
    {
        return new self($page, 'wordpress');
    }

    /**
     * Create "openid" icon
     */
    public static function openid(PageInterface $page) : self
    {
        return new self($page, 'openid');
    }

    /**
     * Create "university" icon
     */
    public static function university(PageInterface $page) : self
    {
        return new self($page, 'university');
    }

    /**
     * Create "institution" icon
     */
    public static function institution(PageInterface $page) : self
    {
        return new self($page, 'institution');
    }

    /**
     * Create "bank" icon
     */
    public static function bank(PageInterface $page) : self
    {
        return new self($page, 'bank');
    }

    /**
     * Create "graduation-cap" icon
     */
    public static function graduationCap(PageInterface $page) : self
    {
        return new self($page, 'graduation-cap');
    }

    /**
     * Create "mortar-board" icon
     */
    public static function mortarBoard(PageInterface $page) : self
    {
        return new self($page, 'mortar-board');
    }

    /**
     * Create "yahoo" icon
     */
    public static function yahoo(PageInterface $page) : self
    {
        return new self($page, 'yahoo');
    }

    /**
     * Create "google" icon
     */
    public static function google(PageInterface $page) : self
    {
        return new self($page, 'google');
    }

    /**
     * Create "reddit" icon
     */
    public static function reddit(PageInterface $page) : self
    {
        return new self($page, 'reddit');
    }

    /**
     * Create "reddit-square" icon
     */
    public static function redditSquare(PageInterface $page) : self
    {
        return new self($page, 'reddit-square');
    }

    /**
     * Create "stumbleupon-circle" icon
     */
    public static function stumbleuponCircle(PageInterface $page) : self
    {
        return new self($page, 'stumbleupon-circle');
    }

    /**
     * Create "stumbleupon" icon
     */
    public static function stumbleupon(PageInterface $page) : self
    {
        return new self($page, 'stumbleupon');
    }

    /**
     * Create "delicious" icon
     */
    public static function delicious(PageInterface $page) : self
    {
        return new self($page, 'delicious');
    }

    /**
     * Create "digg" icon
     */
    public static function digg(PageInterface $page) : self
    {
        return new self($page, 'digg');
    }

    /**
     * Create "pied-piper-pp" icon
     */
    public static function piedPiperPp(PageInterface $page) : self
    {
        return new self($page, 'pied-piper-pp');
    }

    /**
     * Create "pied-piper-alt" icon
     */
    public static function piedPiperAlt(PageInterface $page) : self
    {
        return new self($page, 'pied-piper-alt');
    }

    /**
     * Create "drupal" icon
     */
    public static function drupal(PageInterface $page) : self
    {
        return new self($page, 'drupal');
    }

    /**
     * Create "joomla" icon
     */
    public static function joomla(PageInterface $page) : self
    {
        return new self($page, 'joomla');
    }

    /**
     * Create "language" icon
     */
    public static function language(PageInterface $page) : self
    {
        return new self($page, 'language');
    }

    /**
     * Create "fax" icon
     */
    public static function fax(PageInterface $page) : self
    {
        return new self($page, 'fax');
    }

    /**
     * Create "building" icon
     */
    public static function building(PageInterface $page) : self
    {
        return new self($page, 'building');
    }

    /**
     * Create "child" icon
     */
    public static function child(PageInterface $page) : self
    {
        return new self($page, 'child');
    }

    /**
     * Create "paw" icon
     */
    public static function paw(PageInterface $page) : self
    {
        return new self($page, 'paw');
    }

    /**
     * Create "spoon" icon
     */
    public static function spoon(PageInterface $page) : self
    {
        return new self($page, 'spoon');
    }

    /**
     * Create "cube" icon
     */
    public static function cube(PageInterface $page) : self
    {
        return new self($page, 'cube');
    }

    /**
     * Create "cubes" icon
     */
    public static function cubes(PageInterface $page) : self
    {
        return new self($page, 'cubes');
    }

    /**
     * Create "behance" icon
     */
    public static function behance(PageInterface $page) : self
    {
        return new self($page, 'behance');
    }

    /**
     * Create "behance-square" icon
     */
    public static function behanceSquare(PageInterface $page) : self
    {
        return new self($page, 'behance-square');
    }

    /**
     * Create "steam" icon
     */
    public static function steam(PageInterface $page) : self
    {
        return new self($page, 'steam');
    }

    /**
     * Create "steam-square" icon
     */
    public static function steamSquare(PageInterface $page) : self
    {
        return new self($page, 'steam-square');
    }

    /**
     * Create "recycle" icon
     */
    public static function recycle(PageInterface $page) : self
    {
        return new self($page, 'recycle');
    }

    /**
     * Create "car" icon
     */
    public static function car(PageInterface $page) : self
    {
        return new self($page, 'car');
    }

    /**
     * Create "automobile" icon
     */
    public static function automobile(PageInterface $page) : self
    {
        return new self($page, 'automobile');
    }

    /**
     * Create "taxi" icon
     */
    public static function taxi(PageInterface $page) : self
    {
        return new self($page, 'taxi');
    }

    /**
     * Create "cab" icon
     */
    public static function cab(PageInterface $page) : self
    {
        return new self($page, 'cab');
    }

    /**
     * Create "tree" icon
     */
    public static function tree(PageInterface $page) : self
    {
        return new self($page, 'tree');
    }

    /**
     * Create "spotify" icon
     */
    public static function spotify(PageInterface $page) : self
    {
        return new self($page, 'spotify');
    }

    /**
     * Create "deviantart" icon
     */
    public static function deviantart(PageInterface $page) : self
    {
        return new self($page, 'deviantart');
    }

    /**
     * Create "soundcloud" icon
     */
    public static function soundcloud(PageInterface $page) : self
    {
        return new self($page, 'soundcloud');
    }

    /**
     * Create "database" icon
     */
    public static function database(PageInterface $page) : self
    {
        return new self($page, 'database');
    }

    /**
     * Create "file-pdf-o" icon
     */
    public static function filePdfO(PageInterface $page) : self
    {
        return new self($page, 'file-pdf-o');
    }

    /**
     * Create "file-word-o" icon
     */
    public static function fileWordO(PageInterface $page) : self
    {
        return new self($page, 'file-word-o');
    }

    /**
     * Create "file-excel-o" icon
     */
    public static function fileExcelO(PageInterface $page) : self
    {
        return new self($page, 'file-excel-o');
    }

    /**
     * Create "file-powerpoint-o" icon
     */
    public static function filePowerpointO(PageInterface $page) : self
    {
        return new self($page, 'file-powerpoint-o');
    }

    /**
     * Create "file-image-o" icon
     */
    public static function fileImageO(PageInterface $page) : self
    {
        return new self($page, 'file-image-o');
    }

    /**
     * Create "file-photo-o" icon
     */
    public static function filePhotoO(PageInterface $page) : self
    {
        return new self($page, 'file-photo-o');
    }

    /**
     * Create "file-picture-o" icon
     */
    public static function filePictureO(PageInterface $page) : self
    {
        return new self($page, 'file-picture-o');
    }

    /**
     * Create "file-archive-o" icon
     */
    public static function fileArchiveO(PageInterface $page) : self
    {
        return new self($page, 'file-archive-o');
    }

    /**
     * Create "file-zip-o" icon
     */
    public static function fileZipO(PageInterface $page) : self
    {
        return new self($page, 'file-zip-o');
    }

    /**
     * Create "file-audio-o" icon
     */
    public static function fileAudioO(PageInterface $page) : self
    {
        return new self($page, 'file-audio-o');
    }

    /**
     * Create "file-sound-o" icon
     */
    public static function fileSoundO(PageInterface $page) : self
    {
        return new self($page, 'file-sound-o');
    }

    /**
     * Create "file-video-o" icon
     */
    public static function fileVideoO(PageInterface $page) : self
    {
        return new self($page, 'file-video-o');
    }

    /**
     * Create "file-movie-o" icon
     */
    public static function fileMovieO(PageInterface $page) : self
    {
        return new self($page, 'file-movie-o');
    }

    /**
     * Create "file-code-o" icon
     */
    public static function fileCodeO(PageInterface $page) : self
    {
        return new self($page, 'file-code-o');
    }

    /**
     * Create "vine" icon
     */
    public static function vine(PageInterface $page) : self
    {
        return new self($page, 'vine');
    }

    /**
     * Create "codepen" icon
     */
    public static function codepen(PageInterface $page) : self
    {
        return new self($page, 'codepen');
    }

    /**
     * Create "jsfiddle" icon
     */
    public static function jsfiddle(PageInterface $page) : self
    {
        return new self($page, 'jsfiddle');
    }

    /**
     * Create "life-ring" icon
     */
    public static function lifeRing(PageInterface $page) : self
    {
        return new self($page, 'life-ring');
    }

    /**
     * Create "life-bouy" icon
     */
    public static function lifeBouy(PageInterface $page) : self
    {
        return new self($page, 'life-bouy');
    }

    /**
     * Create "life-buoy" icon
     */
    public static function lifeBuoy(PageInterface $page) : self
    {
        return new self($page, 'life-buoy');
    }

    /**
     * Create "life-saver" icon
     */
    public static function lifeSaver(PageInterface $page) : self
    {
        return new self($page, 'life-saver');
    }

    /**
     * Create "support" icon
     */
    public static function support(PageInterface $page) : self
    {
        return new self($page, 'support');
    }

    /**
     * Create "circle-o-notch" icon
     */
    public static function circleONotch(PageInterface $page) : self
    {
        return new self($page, 'circle-o-notch');
    }

    /**
     * Create "rebel" icon
     */
    public static function rebel(PageInterface $page) : self
    {
        return new self($page, 'rebel');
    }

    /**
     * Create "ra" icon
     */
    public static function ra(PageInterface $page) : self
    {
        return new self($page, 'ra');
    }

    /**
     * Create "resistance" icon
     */
    public static function resistance(PageInterface $page) : self
    {
        return new self($page, 'resistance');
    }

    /**
     * Create "empire" icon
     */
    public static function empire(PageInterface $page) : self
    {
        return new self($page, 'empire');
    }

    /**
     * Create "ge" icon
     */
    public static function ge(PageInterface $page) : self
    {
        return new self($page, 'ge');
    }

    /**
     * Create "git-square" icon
     */
    public static function gitSquare(PageInterface $page) : self
    {
        return new self($page, 'git-square');
    }

    /**
     * Create "git" icon
     */
    public static function git(PageInterface $page) : self
    {
        return new self($page, 'git');
    }

    /**
     * Create "hacker-news" icon
     */
    public static function hackerNews(PageInterface $page) : self
    {
        return new self($page, 'hacker-news');
    }

    /**
     * Create "y-combinator-square" icon
     */
    public static function yCombinatorSquare(PageInterface $page) : self
    {
        return new self($page, 'y-combinator-square');
    }

    /**
     * Create "yc-square" icon
     */
    public static function ycSquare(PageInterface $page) : self
    {
        return new self($page, 'yc-square');
    }

    /**
     * Create "tencent-weibo" icon
     */
    public static function tencentWeibo(PageInterface $page) : self
    {
        return new self($page, 'tencent-weibo');
    }

    /**
     * Create "qq" icon
     */
    public static function qq(PageInterface $page) : self
    {
        return new self($page, 'qq');
    }

    /**
     * Create "weixin" icon
     */
    public static function weixin(PageInterface $page) : self
    {
        return new self($page, 'weixin');
    }

    /**
     * Create "wechat" icon
     */
    public static function wechat(PageInterface $page) : self
    {
        return new self($page, 'wechat');
    }

    /**
     * Create "paper-plane" icon
     */
    public static function paperPlane(PageInterface $page) : self
    {
        return new self($page, 'paper-plane');
    }

    /**
     * Create "send" icon
     */
    public static function send(PageInterface $page) : self
    {
        return new self($page, 'send');
    }

    /**
     * Create "paper-plane-o" icon
     */
    public static function paperPlaneO(PageInterface $page) : self
    {
        return new self($page, 'paper-plane-o');
    }

    /**
     * Create "send-o" icon
     */
    public static function sendO(PageInterface $page) : self
    {
        return new self($page, 'send-o');
    }

    /**
     * Create "history" icon
     */
    public static function history(PageInterface $page) : self
    {
        return new self($page, 'history');
    }

    /**
     * Create "circle-thin" icon
     */
    public static function circleThin(PageInterface $page) : self
    {
        return new self($page, 'circle-thin');
    }

    /**
     * Create "header" icon
     */
    public static function header(PageInterface $page) : self
    {
        return new self($page, 'header');
    }

    /**
     * Create "paragraph" icon
     */
    public static function paragraph(PageInterface $page) : self
    {
        return new self($page, 'paragraph');
    }

    /**
     * Create "sliders" icon
     */
    public static function sliders(PageInterface $page) : self
    {
        return new self($page, 'sliders');
    }

    /**
     * Create "share-alt" icon
     */
    public static function shareAlt(PageInterface $page) : self
    {
        return new self($page, 'share-alt');
    }

    /**
     * Create "share-alt-square" icon
     */
    public static function shareAltSquare(PageInterface $page) : self
    {
        return new self($page, 'share-alt-square');
    }

    /**
     * Create "bomb" icon
     */
    public static function bomb(PageInterface $page) : self
    {
        return new self($page, 'bomb');
    }

    /**
     * Create "futbol-o" icon
     */
    public static function futbolO(PageInterface $page) : self
    {
        return new self($page, 'futbol-o');
    }

    /**
     * Create "soccer-ball-o" icon
     */
    public static function soccerBallO(PageInterface $page) : self
    {
        return new self($page, 'soccer-ball-o');
    }

    /**
     * Create "tty" icon
     */
    public static function tty(PageInterface $page) : self
    {
        return new self($page, 'tty');
    }

    /**
     * Create "binoculars" icon
     */
    public static function binoculars(PageInterface $page) : self
    {
        return new self($page, 'binoculars');
    }

    /**
     * Create "plug" icon
     */
    public static function plug(PageInterface $page) : self
    {
        return new self($page, 'plug');
    }

    /**
     * Create "slideshare" icon
     */
    public static function slideshare(PageInterface $page) : self
    {
        return new self($page, 'slideshare');
    }

    /**
     * Create "twitch" icon
     */
    public static function twitch(PageInterface $page) : self
    {
        return new self($page, 'twitch');
    }

    /**
     * Create "yelp" icon
     */
    public static function yelp(PageInterface $page) : self
    {
        return new self($page, 'yelp');
    }

    /**
     * Create "newspaper-o" icon
     */
    public static function newspaperO(PageInterface $page) : self
    {
        return new self($page, 'newspaper-o');
    }

    /**
     * Create "wifi" icon
     */
    public static function wifi(PageInterface $page) : self
    {
        return new self($page, 'wifi');
    }

    /**
     * Create "calculator" icon
     */
    public static function calculator(PageInterface $page) : self
    {
        return new self($page, 'calculator');
    }

    /**
     * Create "paypal" icon
     */
    public static function paypal(PageInterface $page) : self
    {
        return new self($page, 'paypal');
    }

    /**
     * Create "google-wallet" icon
     */
    public static function googleWallet(PageInterface $page) : self
    {
        return new self($page, 'google-wallet');
    }

    /**
     * Create "cc-visa" icon
     */
    public static function ccVisa(PageInterface $page) : self
    {
        return new self($page, 'cc-visa');
    }

    /**
     * Create "cc-mastercard" icon
     */
    public static function ccMastercard(PageInterface $page) : self
    {
        return new self($page, 'cc-mastercard');
    }

    /**
     * Create "cc-discover" icon
     */
    public static function ccDiscover(PageInterface $page) : self
    {
        return new self($page, 'cc-discover');
    }

    /**
     * Create "cc-amex" icon
     */
    public static function ccAmex(PageInterface $page) : self
    {
        return new self($page, 'cc-amex');
    }

    /**
     * Create "cc-paypal" icon
     */
    public static function ccPaypal(PageInterface $page) : self
    {
        return new self($page, 'cc-paypal');
    }

    /**
     * Create "cc-stripe" icon
     */
    public static function ccStripe(PageInterface $page) : self
    {
        return new self($page, 'cc-stripe');
    }

    /**
     * Create "bell-slash" icon
     */
    public static function bellSlash(PageInterface $page) : self
    {
        return new self($page, 'bell-slash');
    }

    /**
     * Create "bell-slash-o" icon
     */
    public static function bellSlashO(PageInterface $page) : self
    {
        return new self($page, 'bell-slash-o');
    }

    /**
     * Create "trash" icon
     */
    public static function trash(PageInterface $page) : self
    {
        return new self($page, 'trash');
    }

    /**
     * Create "copyright" icon
     */
    public static function copyright(PageInterface $page) : self
    {
        return new self($page, 'copyright');
    }

    /**
     * Create "at" icon
     */
    public static function at(PageInterface $page) : self
    {
        return new self($page, 'at');
    }

    /**
     * Create "eyedropper" icon
     */
    public static function eyedropper(PageInterface $page) : self
    {
        return new self($page, 'eyedropper');
    }

    /**
     * Create "paint-brush" icon
     */
    public static function paintBrush(PageInterface $page) : self
    {
        return new self($page, 'paint-brush');
    }

    /**
     * Create "birthday-cake" icon
     */
    public static function birthdayCake(PageInterface $page) : self
    {
        return new self($page, 'birthday-cake');
    }

    /**
     * Create "area-chart" icon
     */
    public static function areaChart(PageInterface $page) : self
    {
        return new self($page, 'area-chart');
    }

    /**
     * Create "pie-chart" icon
     */
    public static function pieChart(PageInterface $page) : self
    {
        return new self($page, 'pie-chart');
    }

    /**
     * Create "line-chart" icon
     */
    public static function lineChart(PageInterface $page) : self
    {
        return new self($page, 'line-chart');
    }

    /**
     * Create "lastfm" icon
     */
    public static function lastfm(PageInterface $page) : self
    {
        return new self($page, 'lastfm');
    }

    /**
     * Create "lastfm-square" icon
     */
    public static function lastfmSquare(PageInterface $page) : self
    {
        return new self($page, 'lastfm-square');
    }

    /**
     * Create "toggle-off" icon
     */
    public static function toggleOff(PageInterface $page) : self
    {
        return new self($page, 'toggle-off');
    }

    /**
     * Create "toggle-on" icon
     */
    public static function toggleOn(PageInterface $page) : self
    {
        return new self($page, 'toggle-on');
    }

    /**
     * Create "bicycle" icon
     */
    public static function bicycle(PageInterface $page) : self
    {
        return new self($page, 'bicycle');
    }

    /**
     * Create "bus" icon
     */
    public static function bus(PageInterface $page) : self
    {
        return new self($page, 'bus');
    }

    /**
     * Create "ioxhost" icon
     */
    public static function ioxhost(PageInterface $page) : self
    {
        return new self($page, 'ioxhost');
    }

    /**
     * Create "angellist" icon
     */
    public static function angellist(PageInterface $page) : self
    {
        return new self($page, 'angellist');
    }

    /**
     * Create "cc" icon
     */
    public static function cc(PageInterface $page) : self
    {
        return new self($page, 'cc');
    }

    /**
     * Create "ils" icon
     */
    public static function ils(PageInterface $page) : self
    {
        return new self($page, 'ils');
    }

    /**
     * Create "shekel" icon
     */
    public static function shekel(PageInterface $page) : self
    {
        return new self($page, 'shekel');
    }

    /**
     * Create "sheqel" icon
     */
    public static function sheqel(PageInterface $page) : self
    {
        return new self($page, 'sheqel');
    }

    /**
     * Create "meanpath" icon
     */
    public static function meanpath(PageInterface $page) : self
    {
        return new self($page, 'meanpath');
    }

    /**
     * Create "buysellads" icon
     */
    public static function buysellads(PageInterface $page) : self
    {
        return new self($page, 'buysellads');
    }

    /**
     * Create "connectdevelop" icon
     */
    public static function connectdevelop(PageInterface $page) : self
    {
        return new self($page, 'connectdevelop');
    }

    /**
     * Create "dashcube" icon
     */
    public static function dashcube(PageInterface $page) : self
    {
        return new self($page, 'dashcube');
    }

    /**
     * Create "forumbee" icon
     */
    public static function forumbee(PageInterface $page) : self
    {
        return new self($page, 'forumbee');
    }

    /**
     * Create "leanpub" icon
     */
    public static function leanpub(PageInterface $page) : self
    {
        return new self($page, 'leanpub');
    }

    /**
     * Create "sellsy" icon
     */
    public static function sellsy(PageInterface $page) : self
    {
        return new self($page, 'sellsy');
    }

    /**
     * Create "shirtsinbulk" icon
     */
    public static function shirtsinbulk(PageInterface $page) : self
    {
        return new self($page, 'shirtsinbulk');
    }

    /**
     * Create "simplybuilt" icon
     */
    public static function simplybuilt(PageInterface $page) : self
    {
        return new self($page, 'simplybuilt');
    }

    /**
     * Create "skyatlas" icon
     */
    public static function skyatlas(PageInterface $page) : self
    {
        return new self($page, 'skyatlas');
    }

    /**
     * Create "cart-plus" icon
     */
    public static function cartPlus(PageInterface $page) : self
    {
        return new self($page, 'cart-plus');
    }

    /**
     * Create "cart-arrow-down" icon
     */
    public static function cartArrowDown(PageInterface $page) : self
    {
        return new self($page, 'cart-arrow-down');
    }

    /**
     * Create "diamond" icon
     */
    public static function diamond(PageInterface $page) : self
    {
        return new self($page, 'diamond');
    }

    /**
     * Create "ship" icon
     */
    public static function ship(PageInterface $page) : self
    {
        return new self($page, 'ship');
    }

    /**
     * Create "user-secret" icon
     */
    public static function userSecret(PageInterface $page) : self
    {
        return new self($page, 'user-secret');
    }

    /**
     * Create "motorcycle" icon
     */
    public static function motorcycle(PageInterface $page) : self
    {
        return new self($page, 'motorcycle');
    }

    /**
     * Create "street-view" icon
     */
    public static function streetView(PageInterface $page) : self
    {
        return new self($page, 'street-view');
    }

    /**
     * Create "heartbeat" icon
     */
    public static function heartbeat(PageInterface $page) : self
    {
        return new self($page, 'heartbeat');
    }

    /**
     * Create "venus" icon
     */
    public static function venus(PageInterface $page) : self
    {
        return new self($page, 'venus');
    }

    /**
     * Create "mars" icon
     */
    public static function mars(PageInterface $page) : self
    {
        return new self($page, 'mars');
    }

    /**
     * Create "mercury" icon
     */
    public static function mercury(PageInterface $page) : self
    {
        return new self($page, 'mercury');
    }

    /**
     * Create "transgender" icon
     */
    public static function transgender(PageInterface $page) : self
    {
        return new self($page, 'transgender');
    }

    /**
     * Create "intersex" icon
     */
    public static function intersex(PageInterface $page) : self
    {
        return new self($page, 'intersex');
    }

    /**
     * Create "transgender-alt" icon
     */
    public static function transgenderAlt(PageInterface $page) : self
    {
        return new self($page, 'transgender-alt');
    }

    /**
     * Create "venus-double" icon
     */
    public static function venusDouble(PageInterface $page) : self
    {
        return new self($page, 'venus-double');
    }

    /**
     * Create "mars-double" icon
     */
    public static function marsDouble(PageInterface $page) : self
    {
        return new self($page, 'mars-double');
    }

    /**
     * Create "venus-mars" icon
     */
    public static function venusMars(PageInterface $page) : self
    {
        return new self($page, 'venus-mars');
    }

    /**
     * Create "mars-stroke" icon
     */
    public static function marsStroke(PageInterface $page) : self
    {
        return new self($page, 'mars-stroke');
    }

    /**
     * Create "mars-stroke-v" icon
     */
    public static function marsStrokeV(PageInterface $page) : self
    {
        return new self($page, 'mars-stroke-v');
    }

    /**
     * Create "mars-stroke-h" icon
     */
    public static function marsStrokeH(PageInterface $page) : self
    {
        return new self($page, 'mars-stroke-h');
    }

    /**
     * Create "neuter" icon
     */
    public static function neuter(PageInterface $page) : self
    {
        return new self($page, 'neuter');
    }

    /**
     * Create "genderless" icon
     */
    public static function genderless(PageInterface $page) : self
    {
        return new self($page, 'genderless');
    }

    /**
     * Create "facebook-official" icon
     */
    public static function facebookOfficial(PageInterface $page) : self
    {
        return new self($page, 'facebook-official');
    }

    /**
     * Create "pinterest-p" icon
     */
    public static function pinterestP(PageInterface $page) : self
    {
        return new self($page, 'pinterest-p');
    }

    /**
     * Create "whatsapp" icon
     */
    public static function whatsapp(PageInterface $page) : self
    {
        return new self($page, 'whatsapp');
    }

    /**
     * Create "server" icon
     */
    public static function server(PageInterface $page) : self
    {
        return new self($page, 'server');
    }

    /**
     * Create "user-plus" icon
     */
    public static function userPlus(PageInterface $page) : self
    {
        return new self($page, 'user-plus');
    }

    /**
     * Create "user-times" icon
     */
    public static function userTimes(PageInterface $page) : self
    {
        return new self($page, 'user-times');
    }

    /**
     * Create "bed" icon
     */
    public static function bed(PageInterface $page) : self
    {
        return new self($page, 'bed');
    }

    /**
     * Create "hotel" icon
     */
    public static function hotel(PageInterface $page) : self
    {
        return new self($page, 'hotel');
    }

    /**
     * Create "viacoin" icon
     */
    public static function viacoin(PageInterface $page) : self
    {
        return new self($page, 'viacoin');
    }

    /**
     * Create "train" icon
     */
    public static function train(PageInterface $page) : self
    {
        return new self($page, 'train');
    }

    /**
     * Create "subway" icon
     */
    public static function subway(PageInterface $page) : self
    {
        return new self($page, 'subway');
    }

    /**
     * Create "medium" icon
     */
    public static function medium(PageInterface $page) : self
    {
        return new self($page, 'medium');
    }

    /**
     * Create "y-combinator" icon
     */
    public static function yCombinator(PageInterface $page) : self
    {
        return new self($page, 'y-combinator');
    }

    /**
     * Create "yc" icon
     */
    public static function yc(PageInterface $page) : self
    {
        return new self($page, 'yc');
    }

    /**
     * Create "optin-monster" icon
     */
    public static function optinMonster(PageInterface $page) : self
    {
        return new self($page, 'optin-monster');
    }

    /**
     * Create "opencart" icon
     */
    public static function opencart(PageInterface $page) : self
    {
        return new self($page, 'opencart');
    }

    /**
     * Create "expeditedssl" icon
     */
    public static function expeditedssl(PageInterface $page) : self
    {
        return new self($page, 'expeditedssl');
    }

    /**
     * Create "battery-full" icon
     */
    public static function batteryFull(PageInterface $page) : self
    {
        return new self($page, 'battery-full');
    }

    /**
     * Create "battery-4" icon
     */
    public static function battery4(PageInterface $page) : self
    {
        return new self($page, 'battery-4');
    }

    /**
     * Create "battery" icon
     */
    public static function battery(PageInterface $page) : self
    {
        return new self($page, 'battery');
    }

    /**
     * Create "battery-three-quarters" icon
     */
    public static function batteryThreeQuarters(PageInterface $page) : self
    {
        return new self($page, 'battery-three-quarters');
    }

    /**
     * Create "battery-3" icon
     */
    public static function battery3(PageInterface $page) : self
    {
        return new self($page, 'battery-3');
    }

    /**
     * Create "battery-half" icon
     */
    public static function batteryHalf(PageInterface $page) : self
    {
        return new self($page, 'battery-half');
    }

    /**
     * Create "battery-2" icon
     */
    public static function battery2(PageInterface $page) : self
    {
        return new self($page, 'battery-2');
    }

    /**
     * Create "battery-quarter" icon
     */
    public static function batteryQuarter(PageInterface $page) : self
    {
        return new self($page, 'battery-quarter');
    }

    /**
     * Create "battery-1" icon
     */
    public static function battery1(PageInterface $page) : self
    {
        return new self($page, 'battery-1');
    }

    /**
     * Create "battery-empty" icon
     */
    public static function batteryEmpty(PageInterface $page) : self
    {
        return new self($page, 'battery-empty');
    }

    /**
     * Create "battery-0" icon
     */
    public static function battery0(PageInterface $page) : self
    {
        return new self($page, 'battery-0');
    }

    /**
     * Create "mouse-pointer" icon
     */
    public static function mousePointer(PageInterface $page) : self
    {
        return new self($page, 'mouse-pointer');
    }

    /**
     * Create "i-cursor" icon
     */
    public static function iCursor(PageInterface $page) : self
    {
        return new self($page, 'i-cursor');
    }

    /**
     * Create "object-group" icon
     */
    public static function objectGroup(PageInterface $page) : self
    {
        return new self($page, 'object-group');
    }

    /**
     * Create "object-ungroup" icon
     */
    public static function objectUngroup(PageInterface $page) : self
    {
        return new self($page, 'object-ungroup');
    }

    /**
     * Create "sticky-note" icon
     */
    public static function stickyNote(PageInterface $page) : self
    {
        return new self($page, 'sticky-note');
    }

    /**
     * Create "sticky-note-o" icon
     */
    public static function stickyNoteO(PageInterface $page) : self
    {
        return new self($page, 'sticky-note-o');
    }

    /**
     * Create "cc-jcb" icon
     */
    public static function ccJcb(PageInterface $page) : self
    {
        return new self($page, 'cc-jcb');
    }

    /**
     * Create "cc-diners-club" icon
     */
    public static function ccDinersClub(PageInterface $page) : self
    {
        return new self($page, 'cc-diners-club');
    }

    /**
     * Create "clone" icon
     */
    public static function cloneIcon(PageInterface $page) : self
    {
        return new self($page, 'clone');
    }

    /**
     * Create "balance-scale" icon
     */
    public static function balanceScale(PageInterface $page) : self
    {
        return new self($page, 'balance-scale');
    }

    /**
     * Create "hourglass-o" icon
     */
    public static function hourglassO(PageInterface $page) : self
    {
        return new self($page, 'hourglass-o');
    }

    /**
     * Create "hourglass-start" icon
     */
    public static function hourglassStart(PageInterface $page) : self
    {
        return new self($page, 'hourglass-start');
    }

    /**
     * Create "hourglass-1" icon
     */
    public static function hourglass1(PageInterface $page) : self
    {
        return new self($page, 'hourglass-1');
    }

    /**
     * Create "hourglass-half" icon
     */
    public static function hourglassHalf(PageInterface $page) : self
    {
        return new self($page, 'hourglass-half');
    }

    /**
     * Create "hourglass-2" icon
     */
    public static function hourglass2(PageInterface $page) : self
    {
        return new self($page, 'hourglass-2');
    }

    /**
     * Create "hourglass-end" icon
     */
    public static function hourglassEnd(PageInterface $page) : self
    {
        return new self($page, 'hourglass-end');
    }

    /**
     * Create "hourglass-3" icon
     */
    public static function hourglass3(PageInterface $page) : self
    {
        return new self($page, 'hourglass-3');
    }

    /**
     * Create "hourglass" icon
     */
    public static function hourglass(PageInterface $page) : self
    {
        return new self($page, 'hourglass');
    }

    /**
     * Create "hand-rock-o" icon
     */
    public static function handRockO(PageInterface $page) : self
    {
        return new self($page, 'hand-rock-o');
    }

    /**
     * Create "hand-grab-o" icon
     */
    public static function handGrabO(PageInterface $page) : self
    {
        return new self($page, 'hand-grab-o');
    }

    /**
     * Create "hand-paper-o" icon
     */
    public static function handPaperO(PageInterface $page) : self
    {
        return new self($page, 'hand-paper-o');
    }

    /**
     * Create "hand-stop-o" icon
     */
    public static function handStopO(PageInterface $page) : self
    {
        return new self($page, 'hand-stop-o');
    }

    /**
     * Create "hand-scissors-o" icon
     */
    public static function handScissorsO(PageInterface $page) : self
    {
        return new self($page, 'hand-scissors-o');
    }

    /**
     * Create "hand-lizard-o" icon
     */
    public static function handLizardO(PageInterface $page) : self
    {
        return new self($page, 'hand-lizard-o');
    }

    /**
     * Create "hand-spock-o" icon
     */
    public static function handSpockO(PageInterface $page) : self
    {
        return new self($page, 'hand-spock-o');
    }

    /**
     * Create "hand-pointer-o" icon
     */
    public static function handPointerO(PageInterface $page) : self
    {
        return new self($page, 'hand-pointer-o');
    }

    /**
     * Create "hand-peace-o" icon
     */
    public static function handPeaceO(PageInterface $page) : self
    {
        return new self($page, 'hand-peace-o');
    }

    /**
     * Create "trademark" icon
     */
    public static function trademark(PageInterface $page) : self
    {
        return new self($page, 'trademark');
    }

    /**
     * Create "registered" icon
     */
    public static function registered(PageInterface $page) : self
    {
        return new self($page, 'registered');
    }

    /**
     * Create "creative-commons" icon
     */
    public static function creativeCommons(PageInterface $page) : self
    {
        return new self($page, 'creative-commons');
    }

    /**
     * Create "gg" icon
     */
    public static function gg(PageInterface $page) : self
    {
        return new self($page, 'gg');
    }

    /**
     * Create "gg-circle" icon
     */
    public static function ggCircle(PageInterface $page) : self
    {
        return new self($page, 'gg-circle');
    }

    /**
     * Create "tripadvisor" icon
     */
    public static function tripadvisor(PageInterface $page) : self
    {
        return new self($page, 'tripadvisor');
    }

    /**
     * Create "odnoklassniki" icon
     */
    public static function odnoklassniki(PageInterface $page) : self
    {
        return new self($page, 'odnoklassniki');
    }

    /**
     * Create "odnoklassniki-square" icon
     */
    public static function odnoklassnikiSquare(PageInterface $page) : self
    {
        return new self($page, 'odnoklassniki-square');
    }

    /**
     * Create "get-pocket" icon
     */
    public static function getPocket(PageInterface $page) : self
    {
        return new self($page, 'get-pocket');
    }

    /**
     * Create "wikipedia-w" icon
     */
    public static function wikipediaW(PageInterface $page) : self
    {
        return new self($page, 'wikipedia-w');
    }

    /**
     * Create "safari" icon
     */
    public static function safari(PageInterface $page) : self
    {
        return new self($page, 'safari');
    }

    /**
     * Create "chrome" icon
     */
    public static function chrome(PageInterface $page) : self
    {
        return new self($page, 'chrome');
    }

    /**
     * Create "firefox" icon
     */
    public static function firefox(PageInterface $page) : self
    {
        return new self($page, 'firefox');
    }

    /**
     * Create "opera" icon
     */
    public static function opera(PageInterface $page) : self
    {
        return new self($page, 'opera');
    }

    /**
     * Create "internet-explorer" icon
     */
    public static function internetExplorer(PageInterface $page) : self
    {
        return new self($page, 'internet-explorer');
    }

    /**
     * Create "television" icon
     */
    public static function television(PageInterface $page) : self
    {
        return new self($page, 'television');
    }

    /**
     * Create "tv" icon
     */
    public static function tv(PageInterface $page) : self
    {
        return new self($page, 'tv');
    }

    /**
     * Create "contao" icon
     */
    public static function contao(PageInterface $page) : self
    {
        return new self($page, 'contao');
    }

    /**
     * Create "500px" icon
     */
    public static function fiveHundredPx(PageInterface $page) : self
    {
        return new self($page, '500px');
    }

    /**
     * Create "amazon" icon
     */
    public static function amazon(PageInterface $page) : self
    {
        return new self($page, 'amazon');
    }

    /**
     * Create "calendar-plus-o" icon
     */
    public static function calendarPlusO(PageInterface $page) : self
    {
        return new self($page, 'calendar-plus-o');
    }

    /**
     * Create "calendar-minus-o" icon
     */
    public static function calendarMinusO(PageInterface $page) : self
    {
        return new self($page, 'calendar-minus-o');
    }

    /**
     * Create "calendar-times-o" icon
     */
    public static function calendarTimesO(PageInterface $page) : self
    {
        return new self($page, 'calendar-times-o');
    }

    /**
     * Create "calendar-check-o" icon
     */
    public static function calendarCheckO(PageInterface $page) : self
    {
        return new self($page, 'calendar-check-o');
    }

    /**
     * Create "industry" icon
     */
    public static function industry(PageInterface $page) : self
    {
        return new self($page, 'industry');
    }

    /**
     * Create "map-pin" icon
     */
    public static function mapPin(PageInterface $page) : self
    {
        return new self($page, 'map-pin');
    }

    /**
     * Create "map-signs" icon
     */
    public static function mapSigns(PageInterface $page) : self
    {
        return new self($page, 'map-signs');
    }

    /**
     * Create "map-o" icon
     */
    public static function mapO(PageInterface $page) : self
    {
        return new self($page, 'map-o');
    }

    /**
     * Create "map" icon
     */
    public static function map(PageInterface $page) : self
    {
        return new self($page, 'map');
    }

    /**
     * Create "commenting" icon
     */
    public static function commenting(PageInterface $page) : self
    {
        return new self($page, 'commenting');
    }

    /**
     * Create "commenting-o" icon
     */
    public static function commentingO(PageInterface $page) : self
    {
        return new self($page, 'commenting-o');
    }

    /**
     * Create "houzz" icon
     */
    public static function houzz(PageInterface $page) : self
    {
        return new self($page, 'houzz');
    }

    /**
     * Create "vimeo" icon
     */
    public static function vimeo(PageInterface $page) : self
    {
        return new self($page, 'vimeo');
    }

    /**
     * Create "black-tie" icon
     */
    public static function blackTie(PageInterface $page) : self
    {
        return new self($page, 'black-tie');
    }

    /**
     * Create "fonticons" icon
     */
    public static function fonticons(PageInterface $page) : self
    {
        return new self($page, 'fonticons');
    }

    /**
     * Create "reddit-alien" icon
     */
    public static function redditAlien(PageInterface $page) : self
    {
        return new self($page, 'reddit-alien');
    }

    /**
     * Create "edge" icon
     */
    public static function edge(PageInterface $page) : self
    {
        return new self($page, 'edge');
    }

    /**
     * Create "credit-card-alt" icon
     */
    public static function creditCardAlt(PageInterface $page) : self
    {
        return new self($page, 'credit-card-alt');
    }

    /**
     * Create "codiepie" icon
     */
    public static function codiepie(PageInterface $page) : self
    {
        return new self($page, 'codiepie');
    }

    /**
     * Create "modx" icon
     */
    public static function modx(PageInterface $page) : self
    {
        return new self($page, 'modx');
    }

    /**
     * Create "fort-awesome" icon
     */
    public static function fortAwesome(PageInterface $page) : self
    {
        return new self($page, 'fort-awesome');
    }

    /**
     * Create "usb" icon
     */
    public static function usb(PageInterface $page) : self
    {
        return new self($page, 'usb');
    }

    /**
     * Create "product-hunt" icon
     */
    public static function productHunt(PageInterface $page) : self
    {
        return new self($page, 'product-hunt');
    }

    /**
     * Create "mixcloud" icon
     */
    public static function mixcloud(PageInterface $page) : self
    {
        return new self($page, 'mixcloud');
    }

    /**
     * Create "scribd" icon
     */
    public static function scribd(PageInterface $page) : self
    {
        return new self($page, 'scribd');
    }

    /**
     * Create "pause-circle" icon
     */
    public static function pauseCircle(PageInterface $page) : self
    {
        return new self($page, 'pause-circle');
    }

    /**
     * Create "pause-circle-o" icon
     */
    public static function pauseCircleO(PageInterface $page) : self
    {
        return new self($page, 'pause-circle-o');
    }

    /**
     * Create "stop-circle" icon
     */
    public static function stopCircle(PageInterface $page) : self
    {
        return new self($page, 'stop-circle');
    }

    /**
     * Create "stop-circle-o" icon
     */
    public static function stopCircleO(PageInterface $page) : self
    {
        return new self($page, 'stop-circle-o');
    }

    /**
     * Create "shopping-bag" icon
     */
    public static function shoppingBag(PageInterface $page) : self
    {
        return new self($page, 'shopping-bag');
    }

    /**
     * Create "shopping-basket" icon
     */
    public static function shoppingBasket(PageInterface $page) : self
    {
        return new self($page, 'shopping-basket');
    }

    /**
     * Create "hashtag" icon
     */
    public static function hashtag(PageInterface $page) : self
    {
        return new self($page, 'hashtag');
    }

    /**
     * Create "bluetooth" icon
     */
    public static function bluetooth(PageInterface $page) : self
    {
        return new self($page, 'bluetooth');
    }

    /**
     * Create "bluetooth-b" icon
     */
    public static function bluetoothB(PageInterface $page) : self
    {
        return new self($page, 'bluetooth-b');
    }

    /**
     * Create "percent" icon
     */
    public static function percent(PageInterface $page) : self
    {
        return new self($page, 'percent');
    }

    /**
     * Create "gitlab" icon
     */
    public static function gitlab(PageInterface $page) : self
    {
        return new self($page, 'gitlab');
    }

    /**
     * Create "wpbeginner" icon
     */
    public static function wpbeginner(PageInterface $page) : self
    {
        return new self($page, 'wpbeginner');
    }

    /**
     * Create "wpforms" icon
     */
    public static function wpforms(PageInterface $page) : self
    {
        return new self($page, 'wpforms');
    }

    /**
     * Create "envira" icon
     */
    public static function envira(PageInterface $page) : self
    {
        return new self($page, 'envira');
    }

    /**
     * Create "universal-access" icon
     */
    public static function universalAccess(PageInterface $page) : self
    {
        return new self($page, 'universal-access');
    }

    /**
     * Create "wheelchair-alt" icon
     */
    public static function wheelchairAlt(PageInterface $page) : self
    {
        return new self($page, 'wheelchair-alt');
    }

    /**
     * Create "question-circle-o" icon
     */
    public static function questionCircleO(PageInterface $page) : self
    {
        return new self($page, 'question-circle-o');
    }

    /**
     * Create "blind" icon
     */
    public static function blind(PageInterface $page) : self
    {
        return new self($page, 'blind');
    }

    /**
     * Create "audio-description" icon
     */
    public static function audioDescription(PageInterface $page) : self
    {
        return new self($page, 'audio-description');
    }

    /**
     * Create "volume-control-phone" icon
     */
    public static function volumeControlPhone(PageInterface $page) : self
    {
        return new self($page, 'volume-control-phone');
    }

    /**
     * Create "braille" icon
     */
    public static function braille(PageInterface $page) : self
    {
        return new self($page, 'braille');
    }

    /**
     * Create "assistive-listening-systems" icon
     */
    public static function assistiveListeningSystems(PageInterface $page) : self
    {
        return new self($page, 'assistive-listening-systems');
    }

    /**
     * Create "american-sign-language-interpreting" icon
     */
    public static function americanSignLanguageInterpreting(PageInterface $page) : self
    {
        return new self($page, 'american-sign-language-interpreting');
    }

    /**
     * Create "asl-interpreting" icon
     */
    public static function aslInterpreting(PageInterface $page) : self
    {
        return new self($page, 'asl-interpreting');
    }

    /**
     * Create "deaf" icon
     */
    public static function deaf(PageInterface $page) : self
    {
        return new self($page, 'deaf');
    }

    /**
     * Create "deafness" icon
     */
    public static function deafness(PageInterface $page) : self
    {
        return new self($page, 'deafness');
    }

    /**
     * Create "hard-of-hearing" icon
     */
    public static function hardOfHearing(PageInterface $page) : self
    {
        return new self($page, 'hard-of-hearing');
    }

    /**
     * Create "glide" icon
     */
    public static function glide(PageInterface $page) : self
    {
        return new self($page, 'glide');
    }

    /**
     * Create "glide-g" icon
     */
    public static function glideG(PageInterface $page) : self
    {
        return new self($page, 'glide-g');
    }

    /**
     * Create "sign-language" icon
     */
    public static function signLanguage(PageInterface $page) : self
    {
        return new self($page, 'sign-language');
    }

    /**
     * Create "signing" icon
     */
    public static function signing(PageInterface $page) : self
    {
        return new self($page, 'signing');
    }

    /**
     * Create "low-vision" icon
     */
    public static function lowVision(PageInterface $page) : self
    {
        return new self($page, 'low-vision');
    }

    /**
     * Create "viadeo" icon
     */
    public static function viadeo(PageInterface $page) : self
    {
        return new self($page, 'viadeo');
    }

    /**
     * Create "viadeo-square" icon
     */
    public static function viadeoSquare(PageInterface $page) : self
    {
        return new self($page, 'viadeo-square');
    }

    /**
     * Create "snapchat" icon
     */
    public static function snapchat(PageInterface $page) : self
    {
        return new self($page, 'snapchat');
    }

    /**
     * Create "snapchat-ghost" icon
     */
    public static function snapchatGhost(PageInterface $page) : self
    {
        return new self($page, 'snapchat-ghost');
    }

    /**
     * Create "snapchat-square" icon
     */
    public static function snapchatSquare(PageInterface $page) : self
    {
        return new self($page, 'snapchat-square');
    }

    /**
     * Create "pied-piper" icon
     */
    public static function piedPiper(PageInterface $page) : self
    {
        return new self($page, 'pied-piper');
    }

    /**
     * Create "first-order" icon
     */
    public static function firstOrder(PageInterface $page) : self
    {
        return new self($page, 'first-order');
    }

    /**
     * Create "yoast" icon
     */
    public static function yoast(PageInterface $page) : self
    {
        return new self($page, 'yoast');
    }

    /**
     * Create "themeisle" icon
     */
    public static function themeisle(PageInterface $page) : self
    {
        return new self($page, 'themeisle');
    }

    /**
     * Create "google-plus-official" icon
     */
    public static function googlePlusOfficial(PageInterface $page) : self
    {
        return new self($page, 'google-plus-official');
    }

    /**
     * Create "google-plus-circle" icon
     */
    public static function googlePlusCircle(PageInterface $page) : self
    {
        return new self($page, 'google-plus-circle');
    }

    /**
     * Create "font-awesome" icon
     */
    public static function fontAwesome(PageInterface $page) : self
    {
        return new self($page, 'font-awesome');
    }

    /**
     * Create "fa" icon
     */
    public static function fa(PageInterface $page) : self
    {
        return new self($page, 'fa');
    }

    /**
     * Create "handshake-o" icon
     */
    public static function handshakeO(PageInterface $page) : self
    {
        return new self($page, 'handshake-o');
    }

    /**
     * Create "envelope-open" icon
     */
    public static function envelopeOpen(PageInterface $page) : self
    {
        return new self($page, 'envelope-open');
    }

    /**
     * Create "envelope-open-o" icon
     */
    public static function envelopeOpenO(PageInterface $page) : self
    {
        return new self($page, 'envelope-open-o');
    }

    /**
     * Create "linode" icon
     */
    public static function linode(PageInterface $page) : self
    {
        return new self($page, 'linode');
    }

    /**
     * Create "address-book" icon
     */
    public static function addressBook(PageInterface $page) : self
    {
        return new self($page, 'address-book');
    }

    /**
     * Create "address-book-o" icon
     */
    public static function addressBookO(PageInterface $page) : self
    {
        return new self($page, 'address-book-o');
    }

    /**
     * Create "address-card" icon
     */
    public static function addressCard(PageInterface $page) : self
    {
        return new self($page, 'address-card');
    }

    /**
     * Create "vcard" icon
     */
    public static function vcard(PageInterface $page) : self
    {
        return new self($page, 'vcard');
    }

    /**
     * Create "address-card-o" icon
     */
    public static function addressCardO(PageInterface $page) : self
    {
        return new self($page, 'address-card-o');
    }

    /**
     * Create "vcard-o" icon
     */
    public static function vcardO(PageInterface $page) : self
    {
        return new self($page, 'vcard-o');
    }

    /**
     * Create "user-circle" icon
     */
    public static function userCircle(PageInterface $page) : self
    {
        return new self($page, 'user-circle');
    }

    /**
     * Create "user-circle-o" icon
     */
    public static function userCircleO(PageInterface $page) : self
    {
        return new self($page, 'user-circle-o');
    }

    /**
     * Create "user-o" icon
     */
    public static function userO(PageInterface $page) : self
    {
        return new self($page, 'user-o');
    }

    /**
     * Create "id-badge" icon
     */
    public static function idBadge(PageInterface $page) : self
    {
        return new self($page, 'id-badge');
    }

    /**
     * Create "id-card" icon
     */
    public static function idCard(PageInterface $page) : self
    {
        return new self($page, 'id-card');
    }

    /**
     * Create "drivers-license" icon
     */
    public static function driversLicense(PageInterface $page) : self
    {
        return new self($page, 'drivers-license');
    }

    /**
     * Create "id-card-o" icon
     */
    public static function idCardO(PageInterface $page) : self
    {
        return new self($page, 'id-card-o');
    }

    /**
     * Create "drivers-license-o" icon
     */
    public static function driversLicenseO(PageInterface $page) : self
    {
        return new self($page, 'drivers-license-o');
    }

    /**
     * Create "quora" icon
     */
    public static function quora(PageInterface $page) : self
    {
        return new self($page, 'quora');
    }

    /**
     * Create "free-code-camp" icon
     */
    public static function freeCodeCamp(PageInterface $page) : self
    {
        return new self($page, 'free-code-camp');
    }

    /**
     * Create "telegram" icon
     */
    public static function telegram(PageInterface $page) : self
    {
        return new self($page, 'telegram');
    }

    /**
     * Create "thermometer-full" icon
     */
    public static function thermometerFull(PageInterface $page) : self
    {
        return new self($page, 'thermometer-full');
    }

    /**
     * Create "thermometer-4" icon
     */
    public static function thermometer4(PageInterface $page) : self
    {
        return new self($page, 'thermometer-4');
    }

    /**
     * Create "thermometer" icon
     */
    public static function thermometer(PageInterface $page) : self
    {
        return new self($page, 'thermometer');
    }

    /**
     * Create "thermometer-three-quarters" icon
     */
    public static function thermometerThreeQuarters(PageInterface $page) : self
    {
        return new self($page, 'thermometer-three-quarters');
    }

    /**
     * Create "thermometer-3" icon
     */
    public static function thermometer3(PageInterface $page) : self
    {
        return new self($page, 'thermometer-3');
    }

    /**
     * Create "thermometer-half" icon
     */
    public static function thermometerHalf(PageInterface $page) : self
    {
        return new self($page, 'thermometer-half');
    }

    /**
     * Create "thermometer-2" icon
     */
    public static function thermometer2(PageInterface $page) : self
    {
        return new self($page, 'thermometer-2');
    }

    /**
     * Create "thermometer-quarter" icon
     */
    public static function thermometerQuarter(PageInterface $page) : self
    {
        return new self($page, 'thermometer-quarter');
    }

    /**
     * Create "thermometer-1" icon
     */
    public static function thermometer1(PageInterface $page) : self
    {
        return new self($page, 'thermometer-1');
    }

    /**
     * Create "thermometer-empty" icon
     */
    public static function thermometerEmpty(PageInterface $page) : self
    {
        return new self($page, 'thermometer-empty');
    }

    /**
     * Create "thermometer-0" icon
     */
    public static function thermometer0(PageInterface $page) : self
    {
        return new self($page, 'thermometer-0');
    }

    /**
     * Create "shower" icon
     */
    public static function shower(PageInterface $page) : self
    {
        return new self($page, 'shower');
    }

    /**
     * Create "bath" icon
     */
    public static function bath(PageInterface $page) : self
    {
        return new self($page, 'bath');
    }

    /**
     * Create "bathtub" icon
     */
    public static function bathtub(PageInterface $page) : self
    {
        return new self($page, 'bathtub');
    }

    /**
     * Create "s15" icon
     */
    public static function s15(PageInterface $page) : self
    {
        return new self($page, 's15');
    }

    /**
     * Create "podcast" icon
     */
    public static function podcast(PageInterface $page) : self
    {
        return new self($page, 'podcast');
    }

    /**
     * Create "window-maximize" icon
     */
    public static function windowMaximize(PageInterface $page) : self
    {
        return new self($page, 'window-maximize');
    }

    /**
     * Create "window-minimize" icon
     */
    public static function windowMinimize(PageInterface $page) : self
    {
        return new self($page, 'window-minimize');
    }

    /**
     * Create "window-restore" icon
     */
    public static function windowRestore(PageInterface $page) : self
    {
        return new self($page, 'window-restore');
    }

    /**
     * Create "window-close" icon
     */
    public static function windowClose(PageInterface $page) : self
    {
        return new self($page, 'window-close');
    }

    /**
     * Create "times-rectangle" icon
     */
    public static function timesRectangle(PageInterface $page) : self
    {
        return new self($page, 'times-rectangle');
    }

    /**
     * Create "window-close-o" icon
     */
    public static function windowCloseO(PageInterface $page) : self
    {
        return new self($page, 'window-close-o');
    }

    /**
     * Create "times-rectangle-o" icon
     */
    public static function timesRectangleO(PageInterface $page) : self
    {
        return new self($page, 'times-rectangle-o');
    }

    /**
     * Create "bandcamp" icon
     */
    public static function bandcamp(PageInterface $page) : self
    {
        return new self($page, 'bandcamp');
    }

    /**
     * Create "grav" icon
     */
    public static function grav(PageInterface $page) : self
    {
        return new self($page, 'grav');
    }

    /**
     * Create "etsy" icon
     */
    public static function etsy(PageInterface $page) : self
    {
        return new self($page, 'etsy');
    }

    /**
     * Create "imdb" icon
     */
    public static function imdb(PageInterface $page) : self
    {
        return new self($page, 'imdb');
    }

    /**
     * Create "ravelry" icon
     */
    public static function ravelry(PageInterface $page) : self
    {
        return new self($page, 'ravelry');
    }

    /**
     * Create "eercast" icon
     */
    public static function eercast(PageInterface $page) : self
    {
        return new self($page, 'eercast');
    }

    /**
     * Create "microchip" icon
     */
    public static function microchip(PageInterface $page) : self
    {
        return new self($page, 'microchip');
    }

    /**
     * Create "snowflake-o" icon
     */
    public static function snowflakeO(PageInterface $page) : self
    {
        return new self($page, 'snowflake-o');
    }

    /**
     * Create "superpowers" icon
     */
    public static function superpowers(PageInterface $page) : self
    {
        return new self($page, 'superpowers');
    }

    /**
     * Create "wpexplorer" icon
     */
    public static function wpexplorer(PageInterface $page) : self
    {
        return new self($page, 'wpexplorer');
    }

    /**
     * Create "meetup" icon
     */
    public static function meetup(PageInterface $page) : self
    {
        return new self($page, 'meetup');
    }

}
