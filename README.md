# FAKENEWS!

1. \$ git clone this repository.
2. Start a local host on your computer.
   Suggestion: using 'php -S localhost:8000' in your terminal.
   Don't forget to start the host while you're in the cloned folder.
3. Open index.php in your browser.
   (writing 'localhost:8000' in your browser field)
4. For live version only: http://jagtrycktefelju.nu/fakenews/
   Note that the live version might not always be up-to-date.

## Feedback

### Agnes Binett

- adding my own comments/updates after feedback inside ().

1. **header.php:9-13**
   Try to keep CSS styling out of HTML. Maybe put it on line 1 in style.css instead? (Removed CSS attributes from header.php)

2. **style.css:15-19**
   You could expand the navbar a little bit so it fills the space between the top line and picture beneath, as well as making the font-size a little bit bigger (Good advice, will work on this.)

3. **style.css:48**
   Maybe remove text-decoration:underline; since it looks like a link instead of a headline. (Agreed, and fixed)

4. **index.php:50-52**
   If you add some css-styling to this element in your style.css, like a padding or margin, it could be a little bit easier to read since it’s a little bit dense right now. (Good advice, will work on this.)

5. **style.css:95-99**
   In your @media here, try adding some other stuff to make your site more responsive. Like a width for the newsfeed as well as the header so that the edges doesn’t get lost in the mobile view. (Good advice, will work on this.)

6. You can write the README-file with markdown
   (Fixed. Had first done in HTML #fail)

### Testers

1. Agnes Binett
2. Joacim Johansson
3. Jonathan Larsson

### Feedback from Joacim

1. Working on Brave, Edge, Firefox.
2. Consider some changes on logo. The 'n' feels much smaller and the logo could
   be interpreted as 'Fake n Ews'.
3. Take a look at more optimal use of margins on header and body.
   And remember about the margin ratio between top & bottom for header.

   ## Notes to self:

   1. Also work on making it mobile friendly. Thought I did first, but tested on phone way too late,
      and realised it looks like garbage.
