<div class=" flex justify-center items-center pt-24">
    <div class="bg-gray-100 rounded-2xl shadow-lg w-full max-w-4xl p-8">
        <!-- div1 -->
        <div class="flex justify-start border-gray-500 items-center mb-6 w-full">
            <form class="d-flex align-items-center">
                <div class="border-none rounded-md py-2 px-4 text-sm">
                    <input type="text" name="location" id="location"
                        class="block w-full rounded-md border-0 py-1.5 pl-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset"
                        placeholder="Set your location" style="width: 317px" />
                </div>
            </form>
            <div class="bg-gray-100 border-none rounded-md py-2 px-4 text-sm">
                <input type="text"
                    class="block w-full rounded-md border-0 py-1.5 pl-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset"
                    placeholder="Specialization" style="width: 317px" />
            </div>
            <div class="flex items-center">
                <button class="bg-blue-600 text-white rounded-md py-2 px-6 text-sm" style="width: 120px">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <span class="text-sm">Search</span>
                    </div>
                </button>
            </div>
        </div>

        <!-- div2 -->
        <div class="flex justify-start mb-6 w-full pl-4">
            <div class="flex items-center">
                <div class="input-group">
                    <select type="inputWay"
                        class="form-select appearance-none bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-md leading-tight focus:outline-none focus:shadow-outline w-40">
                        <option selected>Availability</option>
                        <option>One Way</option>
                        <option>Multiple Way</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center ml-12 mr-5">
                <select type="passengers"
                    class="form-select appearance-none bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-md leading-tight focus:outline-none focus:shadow-outline w-28">
                    <option selected>Filter</option>
                    <option>1 Filters</option>
                    <option>2 Filters</option>
                    <option>3 Filters</option>
                    <option>4 Filters</option>
                    <option>5 Filters</option>
                </select>
            </div>
            <div class="flex items-center space-x-4 ml-6">
                <span class="text-black-500">Sort By</span>
                <select type="sort"
                    class="form-select appearance-none bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-md leading-tight focus:outline-none focus:shadow-outline w-48">
                    <option selected>Relevance</option>
                    <option>Business</option>
                    <option>Economy</option>
                    <option>1st Class</option>
                </select>
            </div>
        </div>
    </div>
</div>
