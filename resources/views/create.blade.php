@extends('layouts.adminLayout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vaccine report</h4>
        <!-- Multi Column with Form Separator -->
        <div class="card mb-4">
            <h5 class="card-header">PANVAC DOCUMENT </h5>
            <form class="card-body" id="myForm" action="{{ route('store') }}" method="POST">
                @csrf
                <h6>1. Head of Document</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Come from manifacturer</label>
                        <select name="cfm" id="" class="form-label">
                            <option value="yes">yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username" >Control Quality Number</label>
                        <input required type="text" id="multicol-username" name="cqn" class="form-control"
                            placeholder="QCRN: 258" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Name</label>
                        <input required type="text" name="name" id="multicol-username" class="form-control"
                            placeholder="Hester Bioscience Africa Limited" />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Address</label>
                        <input required type="text" name="address" id="multicol-username" class="form-control"
                            placeholder="Tanzania" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">VaccineType </label>
                        <input required type="text" name="vacinetype" id="multicol-username" class="form-control"
                            placeholder="LSD[IUMBY SKIN DISEASE VACCINE]" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Panvac Reference No </label>
                        <input required type="text" name="prn" id="multicol-username" class="form-control"
                            placeholder="P12/412/10/22" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">date of sample receipt </label>
                        <input required type="date" name="dsr" id="multicol-username" class="form-control"
                            placeholder="" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Number of vials </label>
                        <input required type="text" name="nof" id="multicol-username" class="form-control"
                            placeholder="20" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Bacth Number</label>
                        <input required type="text" name="bn" id="multicol-username" class="form-control"
                            placeholder="7002" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Date Of Manufacture </label>
                        <input required type="text" name="dom" id="multicol-username" class="form-control"
                            placeholder="" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Expiry Date </label>
                        <input required type="text" name="ed" id="multicol-username" class="form-control"
                            placeholder="" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Dose/vial</label>
                        <input required type="text" name="dv" id="multicol-username" class="form-control"
                            placeholder="100" />
                    </div>





                </div>
                <hr class="my-4 mx-n4" />
                <h6>2. Details Of Document</h6>
                <div class="row g-3">

                    <div class="table-responsive text-nowrap">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Test Category</th>
                                    <th>Test Conducted</th>
                                    <th>Method Used</th>
                                    <th>Result Obtained</th>
                                    <th>Reference Values</th>
                                    <th>Interpretation/opinion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 40px">
                                    <td>1</td>
                                    <td>STERILITY</td>
                                    <!-- Ajoutez d'autres lignes du tableau ici -->
                                    <td>
                                        <div id="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectTC[]" class="cloned-select"
                                                    onchange="toggleOtherInput(this)">
                                                    <option value="Null">Null</option>
                                                    <option value="Bacteria">Bacteria</option>
                                                    <option value="Bacteria / Fungi">Bacteria / Fungi</option>
                                                    <option value="Mycoplasma contamination">Mycoplasma contamination
                                                    </option>
                                                    <option value=" BVD contamination"> BVD contamination</option>
                                                </select>

                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div id="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectMU[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Culture on BA/TSA">Culture on BA/TSA</option>
                                                    <option value="Culture on FTG/TSB">Culture on FTG/TSB</option>
                                                    <option value="Culture on FTG/TSB">Conventional PCR</option>
                                                    <option value="classical PCR">Classical PCR</option>
                                                    <option value=" Culture and PPLO"> Culture and PPLO</option>
                                                    <option value=" Real Time PCR"> Real Time PCR</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="container">
                                            <div class="input-group">

                                                <div style="  flex-direction: column;">
                                                    <select name="multiselectRO[]" class="select-option"
                                                        onchange="toggleOtherInput(this)"
                                                        style="
                                                    width: 200px;
                                                     ">
                                                        <option value="Null">Null</option>
                                                        <option value="Growth obtained">Growth obtained</option>
                                                        <option value="No growth obtained">No growth obtained</option>
                                                        <option value="Pure colonies obtained">Pure colonies obtained
                                                        </option>
                                                        <option value="Contaminated colonies obtained">Contaminated
                                                            colonies
                                                            obtained</option>
                                                        <option value="Growth obtained">Growth obtained</option>
                                                        <option value="No growth obtained">No growth obtained</option>
                                                        <option value="Identical band obtained">Identical band obtained
                                                        </option>
                                                        <option value="No identical band obtained">No identical band
                                                            obtained
                                                        </option>
                                                        <option value="Growth obtained">Growth obtained</option>
                                                        <option value="No growth obtained">No growth obtained</option>
                                                        <option value="Identical amplification plot obtained">Identical
                                                            amplification plot obtained
                                                        </option>
                                                        <option value="No identical amplification plot obtained">No
                                                            identical
                                                            amplification plot
                                                            obtained</option>
                                                        <option value="Identical dissociation curve obtained">Identical
                                                            dissociation curve obtained
                                                        </option>
                                                        <option value="No identical dissociation curve obtained">No
                                                            identical
                                                            dissociation curve
                                                            obtained</option>
                                                        <option value="Not done">Not done</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <button class="btn-add">+</button>

                                                    <input type="text" name="otherInputRO[]" class="other-input" style="display: none;">

                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectMV[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Absence of growth">Absence of growth</option>
                                                    <option value="Presence of pure colonies">Presence of pure colonies
                                                    </option>
                                                    <option value=" &lt;1 colony/ dose"> &lt;1 colony/ dose </option>
                                                    <option value="Absence of growth"> Absence of growth </option>
                                                    <option value=" Absence of identical band"> Absence of identical band
                                                    </option>
                                                    <option value="Absence of grow"> Absence of grow </option>
                                                    <option value="Absence of identical band"> Absence of identical
                                                        amplification plot
                                                    </option>
                                                    <option value="Absence of identical dissociation curve"> Absence of
                                                        identical dissociation
                                                        curve</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectIO[]">
                                                    <option value="NaN">NaN</option>
                                                    <option value="Pass">Pass</option>
                                                    <option value="Fail">Fail</option>
                                                    <option value="Insufficient samples">Insufficient samples</option>
                                                    <option value="Pass*">Pass*</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>

                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                <!-- Ajoutez d'autres lignes du tableau ici -->


                                <!-- Ajoutez d'autres lignes du tableau ici -->
                                <tr style="border-bottom: 40px">
                                    <td>2</td>
                                    <td>SAFETY</td>
                                    <td>

                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSTC[]">
                                                    <option value="Null">Null</option>
                                                    <option value="In laboratory Animals">In laboratory Animals</option>
                                                    <option value="In host Animals">In host Animals</option>
                                                    <option value=" Residual formalin"> Residual formalin</option>
                                                    <option value=" Innocuity"> Innocuity</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>

                                        </div>

                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSMU[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Inoculation in mince">Inoculation in mice</option>
                                                    <option value="Inoculation in guinea pigs">Inoculation in guinea pigs
                                                    </option>
                                                    <option value="Inoculation in rabbits">Inoculation in rabbits</option>
                                                    <option value="Inoculation in chicken">Inoculation in chicken</option>
                                                    <option value="Inoculation in goats/sheep">Inoculation in goats/sheep
                                                    </option>
                                                    <option value="Inoculation in cattle">Inoculation in cattle</option>
                                                    <option value="Basic fuchsin-Hci">Basic fuchsin-HCI</option>
                                                    <option value="Culture on BHK cells">Culture on BHK cells</option>
                                                    <option value="Culture on vero cells">Culture on vero cells</option>
                                                    <option value="Culture on MDBK cells">Culture on MDBK cells</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div id="container1">
                                            <div class="input-group1">

                                                <div style="  flex-direction: column;">
                                                    <select name="multiselectSRO[]" class="select-option1"
                                                        onchange="toggleOtherInput1(this)"
                                                        style="
                                                    width: 200px;
                                                ">
                                                        <option value="Null">Null</option>
                                                        <option value="Adverse reactions observed">Adverse reactions
                                                            observed
                                                        </option>
                                                        <option value="No Adverse reactions observed">No Adverse reactions
                                                            observed
                                                        </option>
                                                        <option value="Not done">Not done</option>
                                                        <option value="CPE observed">CPE observed</option>
                                                        <option value="No CPE observed">No CPE observed</option>
                                                        <option value="Not done">Not done</option>
                                                        <option value="other1">Other</option>
                                                    </select>
                                                    <button class="btn-add1">+</button>

                                                    <input type="text" name="otherInputSRO[]" class="other-input1" style="display: none;">


                                                </div>
                                            </div>





                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSMV[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Absence of adverse reactions">Absence of adverse
                                                        reactions
                                                    </option>
                                                    <option value="&le;1.0%"> &le;1.0%
                                                    </option>
                                                    <option value=" Absence of CPE"> Absence of CPE</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSIO[]">
                                                    <option value="NaN">NaN</option>
                                                    <option value="Pass">Pass</option>
                                                    <option value="Fail">Fail</option>
                                                    <option value="Insufficient samples">Insufficient samples</option>
                                                    <option value="Pass*">Pass*</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="border-bottom: 40px">
                                    <td>3</td>
                                    <td>POTENCY</td>
                                    <td>
                                        <div id="inputsContainer">
                                            <div class="input-group" style="padding-bottom: 5px">
                                                <input type="text" name="multiselectPTC[]" class="cloned-input">
                                                <button type="button" onclick="duplicateInput(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="container2">
                                            <div class="input-group2">

                                                <div style="  flex-direction: column;">
                                                    <select name="multiselectPMU[]" class="select-option2"
                                                        onchange="toggleOtherInput2(this)"
                                                        style="
                                                    width: 200px;
                                                " ata-index="0" >
                                                        <option value="Null">Null</option>
                                                        <option value="Titration on vero cells">Titration on vero cells
                                                        </option>
                                                        <option value="Titration on MDBK cells">Titration on MDBK cells
                                                        </option>
                                                        <option value="Titration on BHK cells">Titration on BHK cells
                                                        </option>
                                                        <option value="Titration on CEF cells">Titration on CEF cells
                                                        </option>
                                                        <option value="Plaque assay">Plaque assay</option>
                                                        <option value="Titration on embryonated eggs">Titration on
                                                            embryonated
                                                            eggs
                                                        </option>
                                                        <option value="Challenge in laboratory animals">Challenge in
                                                            laboratory
                                                            animals
                                                        </option>
                                                        <option value="Immune response">Immune response</option>
                                                        <option value="BCA">BCA</option>
                                                        <option value="IC-ELISA">IC-ELISA</option>
                                                        <option value="Immune response">Immune response</option>
                                                        <option value="other2">Other</option>
                                                    </select>
                                                    <button class="btn-add2">+</button>

                                                    <input type="text" name="otherInputPMU[]" class="other-input2" style="display: none;">
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                        <div id="inputsContainer">
                                            <div class="input-group" style="padding-bottom: 5px">
                                                <input type="text" name="multiselectPRO[]">
                                                <button type="button" onclick="duplicateInput(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="inputsContainer">
                                            <div class="input-group" style="padding-bottom: 5px">
                                                <input type="text" name="multiselectPMV[]">
                                                <button type="button" onclick="duplicateInput(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectPIO[]">
                                                    <option value="NaN">NaN</option>
                                                    <option value="Pass">Pass</option>
                                                    <option value="Fail">Fail</option>
                                                    <option value="Insufficient samples">Insufficient samples</option>
                                                    <option value="Pass*">Pass*</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="border-bottom: 40px">
                                    <td>4</td>
                                    <td>IDENTITY</td>
                                    <td>
                                        <div id="inputsContainer">
                                            <div class="input-group" style="padding-bottom: 5px">
                                                <input type="text" name="multiselectITC[]">
                                                <button type="button" onclick="duplicateInput(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectIMU[]">
                                                    <option value="Null">Null</option>
                                                    <option value="One step RT-PCR">One step RT-PCR</option>
                                                    <option value="Classical PCR">Classical PCR</option>
                                                    <option value="Real-time PCR">Real-time PCR</option>
                                                    <option value="Immune response">Immune response</option>
                                                    <option value="Challenge in laboratory animals">Challenge in laboratory
                                                        animals
                                                    </option>
                                                    <option value="IC-ELISA">IC-ELISA</option>
                                                    <option value="Biotechmical test">Biochemical tests</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectIRO[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Identical band obtained">Identical band obtained
                                                    </option>
                                                    <option value="No Identical band obtained">No Identical band obtained
                                                    </option>
                                                    <option value="Identical amplification plot obtained">Identical
                                                        amplification plot
                                                        obtained </option>
                                                    <option value="No Identical amplification plot obtained">No Identical
                                                        amplification
                                                        plot obtained</option>
                                                    <option value="Identical dissociation curve obtained">Identical
                                                        dissociation curve
                                                        obtained </option>
                                                    <option value="No Identical dissociation curve obtained ">No Identical
                                                        dissociation
                                                        curve obtained </option>
                                                    <option value="Reference antigen neutralized">Reference antigen
                                                        neutralized
                                                    </option>
                                                    <option value="Reference antigen not neutralized">Reference antigen not
                                                        neutralized
                                                    </option>
                                                    <option value="Vaccinated animals survived Challenge">Vaccinated
                                                        animals
                                                        survived
                                                        Challenge </option>
                                                    <option
                                                        value="Vaccinated did not
                                                    survive Challenge">
                                                        Vaccinated did not
                                                        survive Challenge
                                                    </option>
                                                    <option value="Matching biohcemical profile obtained">Matching
                                                        biochemical
                                                        profile
                                                        obtained</option>
                                                    <option value="No Matching biochemical profile obtained">No Matching
                                                        biochemical profile
                                                        obtained</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectIMV[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Presence of identical band ">Presence of identical band
                                                    </option>
                                                    <option value="Absence of identical band">Absence of identical band
                                                    </option>
                                                    <option value="Presence of identical amplification plot">Presence of
                                                        identical
                                                        amplification plot</option>
                                                    <option value="Presence of identical dissociation curve">Presence of
                                                        identical
                                                        dissociation curve</option>
                                                    <option value="neutralization of Reference antigen">Neutralization of
                                                        Reference antigen
                                                    </option>
                                                    <option value="Survival of Vaccinated animal after Challenge">Survival
                                                        of
                                                        Vaccinated
                                                        animal after Challenge</option>
                                                    <option value="Matching biochemical profile ">Matching biochemical
                                                        profile
                                                    </option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectIIO[]">
                                                    <option value="NaN">NaN</option>
                                                    <option value="Pass">Pass</option>
                                                    <option value="Fail">Fail</option>
                                                    <option value="Insufficient samples">Insufficient samples</option>
                                                    <option value="Pass*">Pass*</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr style="border-bottom: 40px">
                                    <td>5</td>
                                    <td>STABILITY</td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSTTC[]">
                                                    <option value="Null">Null</option>
                                                    <option value=" Vacuum"> Vacuum</option>
                                                    <option value="Residual Moisture">Residual Moisture</option>
                                                    <option value=" Emulsion stability"> Emulsion stability</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSTMU[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Spark tester">Spark tester</option>
                                                    <option value="Syringe">Syringe</option>
                                                    <option value="Thermo-gravimetric">Thermo-gravimetric</option>
                                                    <option value="Drop dispersion ">Drop dispersion </option>
                                                    <option value="Drop Centrifugation ">Centrifugation </option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="container3">
                                            <div class="input-group3">

                                                <div style="  flex-direction: column;">
                                                    <select name="multiselectSTRO[]" class="select-option3"
                                                        onchange="toggleOtherInput3(this)"
                                                        style="
                                                    width: 200px;
                                                ">
                                                        <option value="Null">Null</option>
                                                        <option value="Violated light observed">Violated light observed
                                                        </option>
                                                        <option value="No Violet light observed">No violet light observed
                                                        </option>
                                                        <option value="Suction of observed">Suction of observed</option>
                                                        <option value="No Suction observed">No Suction observed</option>
                                                        <option value="No dispersion">No dispersion</option>
                                                        <option value="dispersion">Dispersion </option>
                                                        <option value="other3">Other</option>
                                                    </select>
                                                    <button class="btn-add3">+</button>

                                                    <input type="text" name="otherInputSTRO[]" class="other-input3" style="display: none;">
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSTMV[]">
                                                    <option value="Null">Null</option>
                                                    <option value="Presence of violet light">Presence of violet light
                                                    </option>
                                                    <option value="Presence of Suction ">Presence of suction </option>
                                                    <option value="Null">Null</option>
                                                    <option value=" &le;2.0%"> &le;2.0% </option>
                                                    <option value=" &le;2.5%"> &le;2.5% </option>
                                                    <option value=" &le;3.0%"> &le;3.0% </option>
                                                    <option value="&le;3.5% "> &le;3.5% </option>
                                                    <option value=" Abscence of dispersion"> Abscence of dispersion
                                                    </option>
                                                    <option value="&lt;5.0% separation"> &lt;5.0% separation </option>

                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="selectContainer">
                                            <div class="select-group">
                                                <select name="multiselectSTIO[]" onchange="toggleTextArea(this)">
                                                    <option value="NaN">NaN</option>
                                                    <option value="Pass">Pass</option>
                                                    <option value="Fail">Fail</option>
                                                    <option value="Insufficient samples">Insufficient samples</option>
                                                    <option value="Pass*">Pass*</option>
                                                </select>
                                                <button type="button" onclick="duplicateSelect(this)">+</button>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <textarea style="display: none" name="note" cols="5" rows="2" id="note"
                        placeholder="Enter The Note Here ............................"></textarea>

                </div>
                <hr class="my-4 mx-n4" />

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1"
                        style="background-color: #25c199; color:white" >Submit</button>
                    <a href="{{ route('home') }}"><button type="reset"
                            class="btn btn-label-secondary">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>
@endsection
