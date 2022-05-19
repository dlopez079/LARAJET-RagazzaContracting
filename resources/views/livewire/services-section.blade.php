<!-- This example requires Tailwind CSS v2.0+ -->
<section id='services' class="bg-white">
    <!-- Header -->
    <div class="relative pb-32 bg-gray-800">
      <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
        <div class="absolute inset-0 bg-red-800 mix-blend-multiply" aria-hidden="true"></div>
      </div>
      <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Services</h1>
        <p class="mt-6 max-w-3xl text-xl text-gray-300">Safe construction begins with qualified and experienced professionals. When submitting construction documents to the Department, the principal Registered Design Professional – the Applicant of Record – is responsible for submission of the complete set at filing: application, drawings and coordination of required documents.</p>
      </div>
    </div>
  
    <!-- Overlapping cards -->
    <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
      <h2 class="sr-only" id="contact-heading">Services</h2>

      {{-- Div that holds the cards.  There are 3 columns.  --}}
      <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">

        {{-- Column 1 --}}
        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">

            <div class="absolute top-0 p-5 inline-block bg-red-600 rounded-xl shadow-lg transform -translate-y-1/2">

              {{-- Heroicon name: outline/phone --}}
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>

            </div>

            <h3 class="text-xl font-medium text-gray-900">Contract Bidding</h3>
            <p class="mt-4 text-base text-gray-500">We work closely with the Mayor's Office of Contract Services (MOCS) and the New York City of School Construction Authority (NYC SCA) to prepare and submit applications on your behalf.  In addition, we prepare certified city payroll.</p>
          </div>
          <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
            <a href="#" class="text-base font-medium text-red-700 hover:text-red-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>

        {{-- Column 2 --}}
        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
            <div class="absolute top-0 p-5 inline-block bg-red-600 rounded-xl shadow-lg transform -translate-y-1/2">
              <!-- Heroicon name: outline/support -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900">Audit Preperation</h3>
            <p class="mt-4 text-base text-gray-500">We protect your business and employees by preparing your worker's compensation, professional liability, and general liability.  In addition, our organized business model will keep you prepared for any union audit if necessary.</p>
          </div>
          <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
            <a href="#" class="text-base font-medium text-red-700 hover:text-red-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>
  
        {{-- Column 3 --}}
        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
            <div class="absolute top-0 p-5 inline-block bg-red-600 rounded-xl shadow-lg transform -translate-y-1/2">
              <!-- Heroicon name: outline/newspaper -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900">Financial Management</h3>
            <p class="mt-4 text-base text-gray-500">Whether you follow a cash or accrual model, we record all transactions for accounts receivables, accounts payables, and AIA Billing.  Detailed reports will prepare your business for short and long-term goals while maintaining your company organized.</p>
          </div>
          <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
            <a href="#" class="text-base font-medium text-red-700 hover:text-red-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>
      </div>
    </section>
</section>
  