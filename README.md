Hi Jaroslav,

Please read my explaination.

The main workflow is like the following.
We have to change the name of the user on certain page so I had unzipped the epub file and change the user's name on certain xhtml file.
Then I had replace the file on epub and converted into mobi file for user to download.

To check this, you can use apache server or others as you want and go to http://localhost.
1. Input user's name and then click Submit. I assume that user would input the full name for exam 'Elnur Huseinov'.
2. If submitted, then it will ajax call to generate.php.
3. There extract the xhtml file which contains user's name in template.epub and replace the user's first and last name with input data.
4. Then copy template.epub file into new one named with user's in data directory.
5. Convert the epub file named with user's into mobi file using calibre ebook convert cli interface.
6. Finally, ajax call returns success and user can download his own mobi file from the link.

You can check the dynamically added user's name on the first page of the downloaded mobi file with any kind of ebook reader.

PS: Please unzip ps file in current directory with password 'elnur'. There are some more to tell you.

Sincerely,
Elnur