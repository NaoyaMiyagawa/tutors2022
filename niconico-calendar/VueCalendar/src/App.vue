<script setup>
//
</script>

<template>
  <div class="ly_header">
    <div class="ly_container">
      <h1>NicoCalendar</h1>

      <form class="bl_nicoCelection">
        <div class="bl_nicoCelection_option">
          <input name="nicoSelect" id="nicoSelect__good" class="js_nicoSelect" data-nico-id="1" type="radio" checked />
          <label for="nicoSelect__good">
            <span class="el_nicoGood iconify" data-icon="gg:smile-mouth-open"></span>
          </label>
        </div>

        <div class="bl_nicoCelection_option">
          <input name="nicoSelect" id="nicoSelect__ok" class="js_nicoSelect" data-nico-id="2" type="radio" />
          <label for="nicoSelect__ok">
            <span class="el_nicoOk iconify" data-icon="fluent:emoji-smile-slight-24-regular"></span>
          </label>
        </div>

        <div class="bl_nicoCelection_option">
          <input name="nicoSelect" id="nicoSelect__bad" class="js_nicoSelect" data-nico-id="3" type="radio" />
          <label for="nicoSelect__bad"><span class="el_nicoBad iconify" data-icon="gg:smile-sad"></span> </label>
        </div>
      </form>
    </div>
  </div>

  <div class="ly_content">
    <div class="ly_container">
      <div class="bl_nicoCale">
        <div class="bl_nicoCale_header">
          <div class="bl_nicoCale_targetMonth">2022年3月</div>
          <div class="bl_nicoCale_control">
            <button class="bl_nicoCale_btn bl_nicoCale_btn__prev">◁</button>
            <button class="bl_nicoCale_btn bl_nicoCale_btn__this">今日</button>
            <button class="bl_nicoCale_btn bl_nicoCale_btn__next">▷</button>
          </div>
        </div>
        <table>
          <thead>
            <tr>
              <th class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">日</th>
              <th class="">月</th>
              <th class="">火</th>
              <th class="">水</th>
              <th class="">木</th>
              <th class="">金</th>
              <th class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">土</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">27</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">28</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">29</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">30</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">31</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">1</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">2</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
            </tr>
            <tr>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">3</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">4</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">5</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">6</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">7</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">8</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">9</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
            </tr>
            <tr>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">10</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">11</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">12</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">13</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">14</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">15</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">16</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
            </tr>
            <tr>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">17</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">18</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">19</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">20</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">21</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">22</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">23</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
            </tr>
            <tr>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">24</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">25</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">26</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date bl_nicoCale_date__today">27</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">28</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">29</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">30</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
            </tr>
            <tr>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sun bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">1</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">2</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">3</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">4</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">5</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">6</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
              <td class="bl_nicoCale_colWeekend bl_nicoCale_colWeekend__sat bl_nicoCale_cell__otherMonth">
                <div class="bl_nicoCale_cellHeader">
                  <span class="bl_nicoCale_date">7</span>
                </div>
                <div class="bl_nicoCale_cellBody"></div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<style>
/***************************************************
 * Variable
 ***************************************************/

:root {
  --color-nico-good: #ff6b84;
  --color-nico-ok: orange;
  --color-nico-bad: lightblue;
  --bg-color-nico-hover: #f1f6f1;
}

/***************************************************
 * Base
 ***************************************************/

body {
  box-sizing: border-box;
}
table {
  border-collapse: collapse;
}

/***************************************************
 * Element
 ***************************************************/

.el_nicoGood {
  color: var(--color-nico-good);
}
.el_nicoOk {
  color: var(--color-nico-ok);
}
.el_nicoBad {
  color: var(--color-nico-bad);
}

/***************************************************
 * Layout
 ***************************************************/

.ly_header {
}
.ly_container {
  width: 90%;
  max-width: 600px;
  margin: auto;
}
.ly_header .ly_container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/***************************************************
 * Block
 ***************************************************/

.bl_nicoCelection {
  display: flex;
  font-size: 1.2em;
}
.bl_nicoCelection_option {
  display: flex;
  padding: 2px 10px;
  border-radius: 15px;
  align-items: center;
  transition: all 0.2s;
  font-size: 2.5em;
}
.bl_nicoCelection_option:hover {
  background-color: var(--bg-color-nico-hover);
}
.bl_nicoCelection_option label {
  display: inline-flex;
  gap: 2px;
}

.bl_nicoCale {
}

.bl_nicoCale_header {
  display: flex;
  justify-content: space-between;
  padding: 10px 0;
}
.bl_nicoCale_targetMonth {
  font-size: 1.2em;
}

.bl_nicoCale table {
  width: 100%;
}

.bl_nicoCale th,
.bl_nicoCale td {
  /* padding: 10px; */
  min-width: 80px;
  height: 80px;
  border: 1px solid black;
  text-align: center;
}

.bl_nicoCale th {
  background-color: beige;
  height: 40px;
}

.bl_nicoCale td {
}
.bl_nicoCale td:hover {
  background-color: #e7f4ff;
  cursor: pointer;
}
.bl_nicoCale td.bl_nicoCale_cell__otherMonth {
  color: #ababab;
}

.bl_nicoCale .bl_nicoCale_cellHeader {
  height: 30px;
  display: flex;
  justify-content: end;
}
.bl_nicoCale .bl_nicoCale_date {
  padding: 2px;
  width: 20px;
  height: 20px;
}
.bl_nicoCale .bl_nicoCale_date.bl_nicoCale_date__today {
  border-radius: 100%;
  background-color: rgb(236, 121, 92);
  color: white;
}

.bl_nicoCale .bl_nicoCale_cellBody {
  height: calc(100% - 30px);
}
.bl_nicoCale .bl_nicoCale_cellBody svg {
  font-size: 40px;
}

.bl_nicoCale_colWeekend {
  background-color: #efefef;
}
.bl_nicoCale_colWeekend.bl_nicoCale_colWeekend__sun {
  color: red;
}
.bl_nicoCale_colWeekend.bl_nicoCale_colWeekend__sat {
  color: blue;
}

.bl_nicoCale_btn {
  padding: 4px 20px;
  border-radius: 15px;
  background-color: white;
  border: 1px solid #dedede;
  box-shadow: 1px 1px 0 0 #e2e2e2;
  cursor: pointer;
  color: black;
  text-decoration: none;
}
.bl_nicoCale_btn:hover {
  background-color: rgb(245, 255, 231);
}
.bl_nicoCale_btn.bl_nicoCale_btn__prev {
}
.bl_nicoCale_btn.bl_nicoCale_btn__this {
}
.bl_nicoCale_btn.bl_nicoCale_btn__next {
}
</style>
