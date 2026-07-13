# CSC 4370 Project 1

This website is based on real community work that Kem has been doing in the ATL Christian Creative space. We agreed that is we had a real life reference it would make the project feel a lot more fun to do. The site highlights different brands & creatives but could show much more if we had more time.

---

# AI Assistance

Most of our AI assistance was to ensure that there was seamless when uploading because the reuploading and testing process is kind of tedious. Then we would also need to update the github which takes a lot of work too. so we plugged it into ai so it could test it for us.

---

After making our website we put it into claude with the rubric info and asked it to detect any inconsistenies or violations of the rubric. we had some references with the wrong names, some mispellings in the bios, and stuff like that. For the most part everything was mapped pretty well.

One of the major issues we faced was that we added "masonry into the code but aestheticaly created a code to just keep it uniform.

This is what it said:

> "there's a real contradiction here worth naming plainly: masonry, by definition, is the visual variation — tiles of different heights based on each image's real shape. If nothing visually changes, the code isn't doing masonry; it's just decorative unused logic sitting next to a grid that still looks uniform. A grader checking this by eye would see the same square tiles either way and mark it the same as before, regardless of what's happening in the PHP behind it."

so we needed Ai assistance to remap everything in the different PHP files to make sure this was implemented well cause when we tried to do it we got this error:

```text
Uncaught Error: Call to undefined function project_row_span() in /home/cahanonu2/public_html/wp/Project_1/pages/member.php:41

Stack trace:
#0 {main} thrown in
/home/cahanonu2/public_html/wp/Project_1/pages/member.php
```

---

We also used it to generate the logic for addidng an Other option in our Commissions form because we saw that only the categories that were preexisting were listed as options. If someone had a different discipline than what was listed or wanted to commission for something different we didnt want it to be limited.

For example if someone saw the work Kem aka "Bunkie" did but wanted her for a project coordinator that needed to be specified. Or even as the site gets updated. If people are looking for a creative not listed we can see a role that we can find individuals to fill.

the important part was the fact that even if they typed a discipline, we didn't want that to immediately be added to the discipline tab in case of misspelling, duplicates, case sensitivity, etc but we still wanted the discipline to placed on the form.

---

Also with the github we ran into an issue with uploading our media file. the error message said:

> "Committing the files to the repository failed. The file is too large and cannot be uploaded. Consider creating the file in a local clone and pushing it to GitHub."

After troubleshooting multiple times i just asked AI how to do it remotely.
