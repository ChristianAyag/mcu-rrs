<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto">
                <p class="text-right mt-3 mr-3">SAMPLE FORM</p>
                <h1 class="text-center mt-10 font-bold text-3xl mb-2">THIS IS A SAMPLE FORM</h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto">
                <p>question 1:</p>
                <input type="text" name="q1" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                <p>question 2:</p>
                <input type="text" name="q2" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto">
                <input type="checkbox" name="c1">
                <label for="c1">checkbox 1</label>
                <input type="checkbox" name="c2">
                <label for="c2">checkbox 2</label>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto">
                <p>question 3:</p>
                <textarea name="q3" id=""></textarea>
                <p>question 4:</p>
                <textarea name="q4" id=""></textarea>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto">
                <a href="">
                    <button type="button" class="bg-primary text-white p-4">SAVE</button>
                </a>
                <a href="">
                    <button type="submit" class="bg-secondary text-primary p-4">EXPORT TO PDF</button>
                </a>
            </div>
        </form>
    </main>
</x-student-layout>