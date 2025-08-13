@section('title', 'Classification of Accounts')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ACCOUNTS CLASSIFICATION
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[25.00%]">P.I. Name</th>
                    <th class="w-[25.00%]">Research Title</th>
                    <th class="w-[25.00%]">Classification of Account</th>
                    <th class="w-[25.00%">Date Classified</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve Health</td>
                    <td>
                        <!-- Combo box for classifying accounts -->
                        <x-combobox-classify-accounts id="reviewClassification" name="reviewClassification"/>
                    </td>
                    <td>7/2/2025<br>13:12:30</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>
                        <!-- Combo box for classifying accounts -->
                        <x-combobox-classify-accounts id="reviewClassification" name="reviewClassification"/>
                    </td>
                    <td>6/30/2025<br>15:09:23</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>