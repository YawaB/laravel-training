<!DOCTYPE html>
<html lang="en">

@include("layouts.app",['page_title'=>'Mapage'])


<body>
   <div class="flex gap-5 border border-2 b flex-col">
       <div class="p-5 border border-2 border-gray-900 text-center bg-blue-700">
           I am a centered text
       </div>
       <div class="bg-red-600 p-5 border border-2 border-gray-900 flex justify-between">
           <div>I am a left text</div>
           <div>I am a right text</div>
       </div>
       <div class="bg-red-500 p-5 self-center border border-2 border-gray-900">
           I am a centered div
       </div>
       <div class="flex justify-between ">
           <div class="bg-pink-400 p-5 border border-2 border-gray-900">
               I am a left div
           </div>
           <div class="bg-pink-400 p-5 border border-2 border-gray-900">
            I am a right div
           </div>
       </div>
       <div class="bg-green-500 p-3 flex justify-between border border-2 border-gray-900">
           <div class="flex flex-col gap-2 ">
                <div class="border border-2 border-gray-900 text-center bg-red-500 p-2">
                    I'm a top div
                </div>
                <div class="border border-2 border-gray-900 text-center bg-red-500 p-2">
                    I'm a bottom div
                </div>
           </div>
           <div class="border border-2 border-gray-900 p-8 bg-red-500">
                I am a right div
           </div>
       </div>

   </div>
   
@include('users',[
'users'=>['brinda','yawa','moise'],
'limit'=>12,
'mot'=>'lamarieiramal'
])

</body>

</html>