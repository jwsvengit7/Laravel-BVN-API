<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/output.css') }}">

       
    </head>
    <body class="antialiased">
 
    <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Verify Your Bvn
              </h1>
              <form class="space-y-4 md:space-y-6" id="bvnForm" action="{{ route('bvn-auth') }}" method="post" >
                @csrf
                 
                  <div>
                      <label for="bvn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BVN</label>
                      <input type="bvn" name="bvn" id="bvn" placeholder="Enter your BVN" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div id="verificationResult"></div>
           
                 
                  <button type="submit" class="w-full text-blue bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">VERIFY</button>
                 
              </form>
          </div>
      </div>
  </div>
</section>

<!-- <script>

  document.getElementById("bvnForm").addEventListener("submit", function (event) {
    event.preventDefault();


    const bvnNumber = document.getElementById("bvn").value;

    fetch("http://127.0.0.1:8000/bvn-auth", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-Requested-With": "XMLHttpRequest",
      },
      body: JSON.stringify({
        bvn: bvnNumber,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        // Handle the verification result
        const resultDiv = document.getElementById("verificationResult");
        if (data.status === "success") {
          resultDiv.innerHTML = `BVN Verified Successfully!`;
        } else {
          resultDiv.innerHTML = `BVN Verification Failed: ${data.error}`;
        }
      })
      .catch((error) => {
        const resultDiv = document.getElementById("verificationResult");
        resultDiv.innerHTML = `An error occurred during BVN verification: ${error}`;
      });
  });
</script> -->







       

    </body>
</html>
