<?php
require_once __DIR__ . '/../app/Models/Contact.php';
$arr = Contact::select();
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
  $id = $_GET['id'];

  $result = Contact::delete($id);
  echo $result;
}
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <title>Contact App</title>
</head>

<body>
  <div class="flex flex-row">
    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-900 h-[100vh] w-full max-w-[20rem] p-4 shadow-xl shadow-gray-900/5">
      <div class="mb-2 p-4 flex flex-col items-center justify-center">
        <img src="contact.png" class="w-42" alt="Logo">
        <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">Welcome, User!</h5>
      </div>
      <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-900">
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
            </svg>
          </div><a href="index.php">Contact Lists</a>
          <div class="grid place-items-center ml-auto justify-self-end">
          </div>
        </div>
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
            </svg>
          </div>Profile
        </div>
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
            </svg>
          </div><a href="login.php">Log Out</a>
        </div>
      </nav>
    </div>

    <div class="w-screen px-0 flex flex-col">
      <table class="w-full min-w-max table-auto text-left items-center justify-center">
        <thead>
          <tr>
            <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
              <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">No.</p>
            </th>
            <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
              <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Id</p>
            </th>
            <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
              <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Phone Number</p>
            </th>
            <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
              <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Owner</p>
            </th>
            <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
              <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Actions</p>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($arr['id'])) {
            foreach ($arr['id'] as $idx => $id) {
          ?>
              <tr>
                <td class="p-3 border-b border-gray-200">
                  <div class="flex items-center justify-around">
                    <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?= $idx + 1 ?></p>
                  </div>
                </td>
                <td class="p-3 border-b border-gray-200">
                  <div class="flex items-center justify-around">
                    <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?= $arr['id'][$idx] ?></p>
                  </div>
                </td>
                <td class="p-3 border-b border-gray-200">
                  <div class="flex items-center justify-around">
                    <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?= $arr['phone_number'][$idx] ?></p>
                  </div>
                </td>
                <td class="p-3 border-b border-gray-200">
                  <div class="flex items-center justify-around">
                    <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?= $arr['owner'][$idx] ?></p>
                  </div>
                </td>
                <td class="p-3 border-b border-gray-200">
                  <div class="flex flex-row items-center justify-center">
                    <div class="flex flex-row items-center justify-center gap-4">
                      <a href="edit.php?id=<?= $id ?>" class="bg-blue-500 flex hover:bg-blue-700 text-white text-sm font-medium py-2 px-2 rounded">
                        Edit
                      </a>
                      <button onclick="showDelButton(<?= $id ?>)" class="bg-red-500 hover:bg-red-700 text-white text-sm font-medium py-2 px-2 rounded">
                        Delete
                      </button>
                    </div>
                    <div id="delbutton_<?= $id ?>" class="fixed left-0 top-0 bg-black bg-opacity-40 w-screen h-screen items-center justify-center opacity-0 hidden transition-opacity duration-500">
                      <div class="bg-white rounded shadow-md p-8 w-[25%] gap-5 flex-col overflow-hidden">
                        <div class="flex gap-3">
                          <div class="bg-red-100 rounded-full text-red-600 min-w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                          </div>
                          <div class="flex-grow">
                            <h1 class="font-bold text-lg mb-2 text-gray-700">Delete Contact?</h1>
                            <p class="text-gray-600">Are you sure you want to delete this contact?</p>
                          </div>
                        </div>
                        <div class=" mt-3 flex justify-end">
                          <button onclick="hideDelButton(<?= $id ?>)" class="bg-white rounded px-4 py-2 mr-3 text-black cursor-pointer hover:bg-gray-300">Batal</button>
                          <form class="flex" id="deleteForm_<?= $id ?>">
                            <a href="" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded">Hapus</a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php
            }
            ?>
        </tbody>
      <?php
          } else {
      ?>
        <tbody>
          <tr>
            <td colspan="4" class="px-6 py-4 text-[16px] font-medium text-[#37251b] text-center">Data Belum Ada...</td>
          </tr>
        </tbody>
      <?php
          }
      ?>
      </table>
      <form action="insert.php" method="POST">
        <div class="flex items-center justify-center">
          <button class="bg-green-500 flex mt-6 hover:bg-green-700 text-white text-sm font-medium py-2 px-2 rounded">
            Add Contact
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function showDelButton(id) {
      console.log("ID received:", id);
      let delbutton = document.getElementById('delbutton_' + id);
      let deleteForm = delbutton.querySelector('#deleteForm_' + id);
      deleteForm.href = "index.php?action=delete&id=" + id;

      if (deleteForm) {
        let deleteLink = deleteForm.querySelector('a');
        if (deleteLink) {
          deleteLink.href = "index.php?action=delete&id=" + id;
          delbutton.classList.remove('hidden');
          delbutton.classList.add('flex');
          setTimeout(() => {
            delbutton.classList.add('opacity-100');
          }, 20);
        } else {
          console.log("Anchor element not found within deleteForm");
        }
      } else {
        console.log("deleteForm not found");
      }
    }



    function hideDelButton(id) {
      let delbutton = document.getElementById('delbutton_' + id);
      delbutton.classList.add('opacity-0')
      setTimeout(() => {
        delbutton.classList.add('hidden')
        delbutton.classList.remove('flex')
      }, 500);
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>