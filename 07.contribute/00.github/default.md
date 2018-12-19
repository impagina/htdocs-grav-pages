---
published: false
---
## Your first patch using Github
- If you don't have an account on Github, <a href="https://github.com">create one</a>
- Fork the Scribus repository:
    - Go to <https://github.com/scribusproject/scribus>
    - Click on the button in the top right corner that says "Fork"
    - You now have your own repository called Scribus (`https://github.com/yourname/scribus`, where yourname is the name you have chosen for Github).
- Each time you want to do a patch, create a new branch of your repository, with a name that matches your change.
- In Scribus find a string that refers to what you want to change and that is somehow not too common.
- On Github, search for that string in the repository by using the "Search" field in the top part of the page.
- Click on the file that matches your result (you might have to click on a few files before finding the right one; if you get too many results, try to use another search criterium and put quotes around sentences)
- Click on the edit icon make the change and commit it.
- If you want to test the change, clone the repository on your computer (or pull the new version if you already have it locally), switch to the new branch and compile as usual.
- If you're happy with your change, make a pull request by going to the main page of your repository and clicking on the green button left of the branch name, in the header of the page.
- Don't use the same branch for other changes, since those will be added to the pull request you already sent.
Once you're comfortable with this way of doing, you should try to do patches on the source code that you have pulled on your computer.
