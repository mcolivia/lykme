<body ng-app="myDate" ng-controller="myDateController">
    <div class="row date">
        <div class="subheader">Birthday</div>
        <div id="dob-year" class="input-wrapper small-4 columns" style="padding-left: 0;">
            <select name="year" id="year" ng-model="year" ng-options="y for y in years" ng-change="updateDate('year')" onchange="changeMe(this)" required>
                <option value='' disabled>Year</option>
            </select>
        </div>
        <div id="dob-month" class="input-wrapper small-4 columns">
            <select name="month" id="month" ng-model="month" ng-options="m.name for m in months | validMonths:year" ng-change="updateDate('month')" onchange="changeMe(this)" required>
                <option value='' disabled>Month</option>
            </select>
        </div>
        <div id="dob-day" class="input-wrapper small-4 columns" style="padding-right: 0;">
            <select name="day" id="day" ng-model="day" ng-options="d for d in days | daysInMonth:year:month | validDays:year:month" ng-change="updateDate('day')" onchange="changeMe(this)" required>
                <option value='' disabled>Day</option>
            </select>
        </div>
    </div>



    <div class="row">
        <p class="columns small-12">
            Selected date: {{fieldValues.dateOfBirth | date: 'longDate'}}
        </p>
        <p class="columns small-12">
            Select a date of birth from the dropdowns above. Notice that you are unable to select invalid dates (30th February) or dates what would mean that you are under 18 years of age.
        </p>
    </div>
</body>