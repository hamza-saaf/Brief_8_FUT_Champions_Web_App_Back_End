<!-- Modal -->

<div class="modal-content">
    <div>
        <button type="button" id="openModal"
            class="font-bold bg-sky-300 text-black py-2 px-4 rounded hover:bg-sky-700">
            Add-Player
        </button>
        <select class="font-bold bg-sky-300 text-black py-2 px-4 outline-none rounded hover:bg-sky-500" name="plan"
            id="plan1">
            <option value="">4-3-3</option>
            <option value="">4-4-2</option>
        </select>
    </div>

    <div class="flex justify-start flex-wrap mt-3 gap-3" id="add_players"></div>

    <div id="myModal"
        class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg w-11/12 sm:w-1/2">
            <!-- Modal Header -->
            <div class="border-b p-4 flex justify-between items-center">
                <h4 class="text-lg font-semibold">Enter Player Information</h4>
                <button type="button" id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-4 max-h-96 overflow-y-auto">
                <form action="post" onsubmit="AlertForm(event)">
                    <fieldset class="space-y-4">
                        <legend class="font-bold text-xl">Add Player:</legend>
                        <div>
                            <label for="namePlayer" class="block text-sm font-medium text-gray-700">Name</label>
                            <input id="namePlayer" type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter name" onchange="validateName()">
                            <span id="NameError" class="text-red-600 hidden text-sm">Name not valid!</span>
                        </div>

                        <div>
                            <label for="PhotoP" class="block text-sm font-medium text-gray-700">Add Photo</label>
                            <input id="PhotoP" type="file"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>

                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                            <select id="position" name="positionSelect"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value=""></option>
                                <option value="ST">ST</option>
                                <option value="CM">CM</option>
                                <option value="RB">RB</option>
                                <option value="LB">LB</option>
                                <option value="CB">CB</option>
                                <option value="RW">RW</option>
                                <option value="GK">GK</option>
                            </select>
                            <span id="PositionError" class="text-red-600 hidden text-sm">Position not valid!</span>
                        </div>

                        <div>
                            <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                            <input id="nationality" type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter nationality">
                            <span id="natioError" class="text-red-600 hidden text-sm">Nationality not valid!</span>
                        </div>

                        <div>
                            <label for="flag" class="block text-sm font-medium text-gray-700">Flag</label>
                            <input id="flag" type="file"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>

                        <div>
                            <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
                            <input id="rating" type="number" min="10" max="99"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter rating">
                        </div>

                        
                    </fieldset>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="border-t p-4 flex justify-end space-x-4">
                <button type="button" id="closeModalFooter"
                    class="bg-gray-200 text-gray-700 py-2 px-4 rounded hover:bg-gray-300">
                    Close
                </button>
                <button type="submit"
                    class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>
<script src="js/main.js"></script>


