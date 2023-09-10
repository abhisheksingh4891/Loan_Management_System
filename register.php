
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
  </head>
  <body>
    <header class="text-gray-200 bg-stone-800 body-font lg:px-28 xl:px-28">
        <div
          class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
        >
          <a
            href="home.html"
            class="flex title-font font-medium border-l-2 items-center text-gray-200 mb-4 md:mb-0"
          >
            <span class="ml-3 text-xl underline underline-offset-4 font-Ubuntu"
              >Customer Loan Service</span
            >
            <span class="ml-3 text-sm font-Ubuntu animate-bounce">We are for you</span>
          </a>
  
          <nav
            class="md:ml-auto flex flex-wrap items-center text-base justify-center"
          >
            <a
              href="home.html"
              class="mr-5 font-Ubuntu font-medium hover:text-red-500 hover:cursor-pointer"
              >HOME</a
            >
            <a
              href="login.html"
              class="mr-5 font-Ubuntu font-medium hover:text-red-500 hover:cursor-pointer"
              >LOGIN</a
            >
            <a
              href="register.php"
              class="mr-5 font-Ubuntu font-medium hover:text-red-500 hover:cursor-pointer"
              >SIGNUP</a
            >
            <a
              href="contact.html"
              class="mr-5 font-Ubuntu font-medium hover:text-red-500 hover:cursor-pointer"
              >CONTACT US</a
            >
          </nav>
        </div>
      </header>
    <div class="bg-stone-200">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          class="fill-stone-800"
          fillOpacity="1"
          d="M0,160L48,144C96,128,192,96,288,101.3C384,107,480,149,576,170.7C672,192,768,192,864,181.3C960,171,1056,149,1152,154.7C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
    </div>

    <!-- Main content -->
    <div class="bg-stone-200 w-full flex justify-center">
      <form
        class="mx-auto w-4/5 rounded-xl shadow-xl shadow-stone-500/40 px-3 md:px-5 lg:px-5 xl:px-5"
        action="registerconnect.php"
      >
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 w-2/5 text-lg font-Ubuntu font-bold text-stone-800"
            htmlFor=""
            >Loan Type:<span class="text-red-600">*</span></label
          >
          <select
            class="p-2 border-2 text-lg border-stone-800 w-3/5 rounded-lg font-Ubuntu font-bold text-stone-800"
            name ="types"
            id="loanType"
            name="laonType"
          >
            <option value="vehicle">Vehicle</option>
            <option value="home">Home</option>
            <option value="education">Education</option>
            <option value="personal">Personal</option>
            <option value="business">Business</option>
            <option value="gold">Gold</option>
          </select>
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 w-2/5 font-Ubuntu font-bold text-stone-800 text-lg"
            htmlFor="amount"
            >Desired Amount:<span class="text-red-600">*</span></label
            >
            <input
            class="p-2 w-3/5 font-Ubuntu font-bold text-stone-800 border-2 text-lg border-stone-800 rounded-lg"
            name ="amount"
            placeholder="INR"
            type="number"
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 font-Ubuntu font-bold text-stone-800 w-2/5 text-lg"
            htmlFor="fname"
            >First Name:<span class="text-red-600">*</span></label
            >
            <input
            class="p-2 font-Ubuntu font-bold text-stone-800 w-3/5 text-lg border-2 border-stone-800 rounded-lg"
            name ="fname"
            type="text"
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor="lname"
            >Last Name:<span class="text-red-600">*</span></label
            >
            <input
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            name ="lname"
            type="text"
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor="age"
            >Age:<span class="text-red-600">*</span></label
            >
            <input
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            type="number"
            name ="age"
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor="numbers"
            >Phone number:<span class="text-red-600">*</span></label
          >
          <input
            pattern="[0-9]{10}"
            maxlength="10"
            name="pnumber"
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            type=""
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor=""
            >Permanent address:<span class="text-red-600">*</span></label
            >
            <input
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            name ="address1"
            type="text"
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor=""
            >Pan Card Number:<span class="text-red-600">*</span></label
            >
            <input
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            name ="pan"
            type="Number"
            required
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor=""
            >Aadhar Card Number: <span class="text-red-600">*</span></label
            >
            <input
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            name ="aadhar"
            type="number"
            required
          />
        </div>
        <div class="flex justify-center">
          <a
            href="https://uidai.gov.in/my-aadhaar/about-your-aadhaar/aadhaar-enrolment.html#:~:text=Aadhaar%20enrolment%20is%20free%20of,the%20list%20of%20supporting%20documents."
            target="_blank"
            class="underline font-Ubuntu hover:text-red-700"
            href=""
            >Apply for Adhar Card</a
          >
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor=""
            >Postal Code:<span class="text-red-600">*</span></label
            >
            <input
            pattern="[0-9]{8}"
            maxlength="8"
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 w-3/5 border-2 border-stone-800 rounded-lg"
            name ="code"
            type=""
          />
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor=""
            >Purpose of Loan:<span class="text-red-600">*</span></label
            >
            <textarea
            class="p-2 text-lg font-Ubuntu font-bold text-stone-800 border-2 w-3/5 border-stone-800 rounded-lg"
            name ="purpose"
            type="number"
            required
          >
          </textarea>
        </div>
        <div class="flex justify-center">
          <a class="underline font-Ubuntu hover:text-red-700" href=""
            >Read Terms & Conditions</a
          >
        </div>
        <div class="mx-auto w-full my-4 flex justify-center items-center">
          <label
            class="px-4 text-lg font-Ubuntu font-bold text-stone-800 w-2/5"
            htmlFor=""
            >Agree with Terms & Conditions:<span class="text-red-600"
              >*</span
            ></label
          >

          <div class="w-3/5 mx-auto flex justify-center items-center">
            <div class="mx-12">
              <input name="uq" type="radio" />
              <label class="text-lg font-Ubuntu" htmlFor="">Yes</label>
            </div>
            <div class="mx-12">
              <input name="uq" type="radio" />
              <label class="text-lg font-Ubuntu" htmlFor="">No</label>
            </div>
          </div>
        </div>

<!-- submit button from 258 to 265 -->
        <div class="mx-auto w-full flex justify-center items-center my-5">
        <input type="submit" name="SUBMIT" id="SUBMIT" value="Submit"
        type="button"
            data-mdb-ripple="true"
            data-mdb-ripple-color="dark"
            class="inline-block px-6 py-2.5 bg-stone-700 text-white font-medium font-Ubuntu text-md leading-tight uppercase rounded shadow-md hover:bg-stone-800 hover:shadow-lg focus:bg-stone-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-stone-900 active:shadow-lg transition duration-150 ease-in-out"
          >

        </form>
        </div>
    </div>
    <div class="bg-stone-200">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          class="fill-stone-800"
          fillOpacity="1"
          d="M0,160L48,144C96,128,192,96,288,101.3C384,107,480,149,576,170.7C672,192,768,192,864,181.3C960,171,1056,149,1152,154.7C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>

    <!-- Footer -->

    <footer class="text-gray-300 bg-stone-800 lg:px-28 xl:px-28 body-font">
        <div
          class="container px-5 py-3 mx-auto flex items-center sm:flex-row flex-col"
        >
          <p
            class="text-sm text-gray-300 sm:ml-4 sm:pl-4 sm:border-l-2 font-Ubuntu sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
          >
            © 2022-
            <a
              href="home.html"
              class="text-gray-300 ml-1 font-Ubuntu"
              rel="noopener noreferrer"
              target="_blank"
              >Customer Loan Service</a
            >
          </p>
          <span
            class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
          >
            <a
              href="login.html"
              class="text-gray-300 font-Ubuntu font-medium hover:text-red-500 hover:cursor-pointer"
            >
              LOGIN
            </a>
  
            <a
              href="register.php"
              class="ml-3 font-Ubuntu text-gray-300 font-medium hover:text-red-500 hover:cursor-pointer"
            >
              SIGNUP
            </a>
            <a
              href="contact.html"
              class="ml-3 font-Ubuntu text-gray-300 font-medium hover:text-red-500 hover:cursor-pointer"
            >
              CONTACT US
            </a>
          </span>
        </div>
      </footer>
  </body>
</html>
