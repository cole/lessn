### 1.0.7 ###
- added iOS web app elements and styles (touch icon, favicon, hidden non applicable elements, and larger touch targets)
- moved readonly attribute on done page to only be set for non-iOS (under iOS it disables selection for some reason). @splorp's idea: twitter.com/splorp/status/48750961610604546
- updated README and CHANGES, converted them to markdown for github readability

-----------------------------------------------------------

### 1.0.6 ###
- added "Updating to 1.0.6 from 1.0.5" to README.txt
- added support for (manually-added) extensions on Lessn'd urls, eg. http://shaun.in/g/ae and http://shaun.in/g/ae.mp3 are equal

-----------------------------------------------------------

### 1.0.5 ###
- added "Updating to 1.0.5" to README.txt
- &api= requests now require your API key (now available on the same screen as the bookmarklets) if not already logged in
- fixed bug where &api request returned the original url not the Lessn'd url

-----------------------------------------------------------

### 1.0.4 ###
- changed redirect replacement token to %l to work better with Fever's sharing feature

-----------------------------------------------------------

### 1.0.3 ###
- added "Updating from 1.0.2" to README.txt
- added &redirect= argument to create custom redirects (%u replaced with the Lessn'd url)
- adding &api to the Lessn url now returns just the Lessn'd url as plaintext
- added LICENSE.txt
- updated note about .htaccess in README.txt

-----------------------------------------------------------

### 1.0.2 ###
- updated existing url query to also compare the url in the event of multiple matching checksums
- changed UNIQUE checksum index to non-unique INDEX to allow for legitimate collisions
- added note about .htaccess to README.txt
- added "Updating from 1.0.1" to README.txt
- added CHANGES.txt

-----------------------------------------------------------

### 1.0.1 ###
- fixed YEAR definition (was 356 days instead of 365)
- fixed typos in README.txt

-----------------------------------------------------------

### 1.0.0 ###
- initial release