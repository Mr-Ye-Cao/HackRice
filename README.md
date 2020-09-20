# Project EMBRACE
@HackRice 2020 First-timer track

### Mission Statement: Free mentoring & education platform for LGBTQ+ teenagers

Why EMBRACE?
LGBTQ teenagers may experience high levels of anxiety at home, at school, in social circles and communities. Often, they cannot get enough help and support from the people around them. 
Embrace connects these teenagers to qualified mentors from our partner LGBTQ organizations. After each teenager gets paired up with a mentor, they will be able to express their feelings and get advice from someone who is experienced and empathetic. 
So, if you ever need help, don’t hesitate to reach out. We are here to EMBRACE you!

### Core Functions

#### 1. Login & Signup
Overview: Both mentors and mentees are required to complete their profiles through signing up for an account.  
The sign-up process includes answering a set of specially designed diagonistic questions and common questions like username and passwords.  

Tech & Framworks used: 
1. **PHP** with Validation Library to confirm form submission
2. **MySql** to store account information
3. **HTML, CSS, JavaScript with BootStrap** framwork to build form and handle various types of inputs

See Files: login.php, signup.php, signupm.php (Sign-up page for mentor)

#### 2. Chatting, story submission, and user profile system
Overview: After the mentor and mentee are paired by algorithm, the mentor will provide guidance for  
the mentee through our online platform and he/she will have access to the profile of the mentee. 
The mentor will also provides insights by inputing and submitting their personal stories in our website.

Tech & Framworks used:
1. **PHP** with **explode()** method to conduct text classfication when storing inputs from the frontend.
2. **MySql** to store story and chatting data. 4 Tables in total are used to implement the function.
3. **HTML, CSS, JavaScript with BootStrap** framwork to build original styles and interaction script. 80% Freshly self made. **We're not like those teams out there that only crtl+v templates**

See Files: chatMentor.php, chatStudent.php, write.html etc.

#### 3. Mentor & Mentee Matching+Supervision Algorithm 
Overview: One of the platform's key function is pairing individual mentee with the mentor most suitable to give him/her advice.  
The matching degree is based off the similarity of the mentor and mentee in certain aspects.  
Also,

Tech & Framworks used:
1. **PHP** to build self-design algorithm that optimizes the pairing to minimize the cost function of absolute value differences.
2. Future plan: Use hate speech detection machine learning model to automatically supervise mentor behaviors after the volume of mentor&mentee pairs increased. 
Ideal Data pipeline: Mentor's comments for mentee --> Text cleaning --> GloVe vectorization --> Model Selection

See Files: Signup.php (The algorithm is implemented during the course of signing up)

