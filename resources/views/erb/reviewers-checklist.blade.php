@section('title', 'Reviewers Checklists')
<x-erb-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            REVIEWERS CHECKLIST
        </h2>
        <br>

        <table id="myTable"
            class="min-w-full max-md:text-[15px] display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-[18px]/7 max-2xl:text-[16px]">
                <tr class="header-table">
                    <th class="w-1/6">Research Protocol</th>
                    <th class="w-1/6">Research Title</th>
                    <th class="w-1/6">P.I. Name</th>
                    <th class="w-1/6">Co-I. Name(s)</th>
                    <th class="w-1/6">View</th>
                    <th class="w-1/6">Date Submitted</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-2xl:text-[15px]/6">
                <tr>
                    <td>2025-001</td>
                    <td>Analyzing the Influence of Cultural Factors on Consumer Behavior</td>
                    <td>Karin Josephs</td>
                    <td>
                        Alexander Feuer<label for="">,</label><br>
                        Rene Phillips
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>2025-002</td>
                    <td>Investigating the Link Between Air Pollution and Respiratory Diseases</td>
                    <td>Paula Parente</td>
                    <td>
                        Pascale Cartrain<label for="">,</label><br>
                        Miguel Angel Paolino
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>2025-003</td>
                    <td>The Role of Artificial Intelligence in Enhancing Healthcare Delivery</td>
                    <td>Yvonne Moncada</td>
                    <td>
                        Philip Cramer<label for="">,</label><br>
                        Patricia McKenna
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>2025-004</td>
                    <td>Evaluating the Effectiveness of Mindfulness-Based Stress Reduction in Chronic Pain
                        Management</td>
                    <td>Catherine Dewey</td>
                    <td>
                        Philip Cramer<label for="">,</label><br>
                        Patricia McKenna
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-erb-layout>