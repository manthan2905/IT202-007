# Project Name: (Simple Shop)
## Project Summary: (This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.)
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (Heroku Prod of Project folder)
## Your Name: Manthan Patel

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) User will be able to register a new account (from the proposal bullet point, if it's a sub-point indent it properly)

Form Fields
Username, email, password, confirm password (other fields optional)
Email is required and must be validated
Username is required
Confirm password’s match
Users Table
Id, username, email, password (60 characters), created, modified
Password must be hashed (plain text passwords will lose points)
Email should be unique
Username should be unique
System should let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form
The only fields that may be cleared are the password fields

  -  List of Evidence of Feature Completion
    - Status: Completed (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
    https://github.com/manthan2905/IT202-007/pull/46
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
 
 Email Not Valid
  
  <img width="1440" alt="Email_not_valid" src="https://user-images.githubusercontent.com/68133264/141606791-851a7281-d150-49d0-9d37-02a15be4953a.png">
  
  password do not match
  
  ![Password_donot_match](https://user-images.githubusercontent.com/68133264/141606809-65aa23ba-212c-4bb7-8b6e-44495bda39e8.jpg)

  Succefully registered
  
  <img width="1440" alt="Successfully registered" src="https://user-images.githubusercontent.com/68133264/141606865-68064d53-1529-4fe6-bf2d-e4a56d7a92a0.png">

user table

<img width="1133" alt="User_table" src="https://user-images.githubusercontent.com/68133264/141606908-fda4532a-9002-4c36-8f32-cc996a09b226.png">

  
  

        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) User will be able to login to their account (from the proposal bullet point, if it's a sub-point indent it properly)

Form
User can login with email or username
This can be done as a single field or as two separate fields
Password is required
User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
Logging in should fetch the user’s details (and roles) and save them into the session.
User will be directed to a landing page upon login
This is a protected page (non-logged in users shouldn’t have access)
This can be home, profile, a dashboard, etc

  -  List of Evidence of Feature Completion
    - Status: Complete (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      https://github.com/manthan2905/IT202-007/pull/46
         - PR link #1 (repeat as necessary)
    - Screenshots

user able to login

<img width="1440" alt="User_able_to_login" src="https://user-images.githubusercontent.com/68133264/141607005-a45c79ed-20ee-4d9b-abb9-21b136c3aeaf.png">

incorrect Password

<img width="1155" alt="Incorrect_password" src="https://user-images.githubusercontent.com/68133264/141607055-408a01e8-7ef6-4e07-93de-38480a20aeab.png">

user don't exist

<img width="1152" alt="User_not_exist" src="https://user-images.githubusercontent.com/68133264/141607085-92ab04be-d395-4d8b-83ee-306bae4e746a.png">



      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Basic security rules implemented (from the proposal bullet point, if it's a sub-point indent it properly)

Authentication:
Function to check if user is logged in
Function should be called on appropriate pages that only allow logged in users
Roles/Authorization:
Have a roles table (see below)

  -  List of Evidence of Feature Completion
    - Status: Complete (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     https://github.com/manthan2905/IT202-007/pull/46
    - Screenshots
check if user is logged in 

<img width="1156" alt="Check_User_is_logged_in" src="https://user-images.githubusercontent.com/68133264/141607382-553f5103-95e3-4847-82f8-d8fe087bd7ac.png">


roles table 

<img width="1011" alt="Roles_table" src="https://user-images.githubusercontent.com/68133264/141607267-0e061b27-e21c-48c8-a04d-580e939edd5c.png">

      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(11/11/2021 of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
- Milestone 2

#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
- Milestone 3
- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
