<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container uk-margin-bottom">
                        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="ts_checkbox_all"></th>
                                <th class="filter-false remove sorter-false">Image</th>
                                <th>Name</th>
                                <th>Major</th>
                                <th>Sex</th>
                                <th>English</th>
                                <th>Japanese</th>
                                <th>Calculus</th>
                                <th>Geometry</th>
                                <th class="filter-false remove sorter-false uk-text-center">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Major</th>
                                    <th>Sex</th>
                                    <th>English</th>
                                    <th>Japanese</th>
                                    <th>Calculus</th>
                                    <th>Geometry</th>
                                    <th class="uk-text-center">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student01</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>80</td>
                                <td>70</td>
                                <td>75</td>
                                <td>80</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student02</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>90</td>
                                <td>88</td>
                                <td>100</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student03</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>85</td>
                                <td>95</td>
                                <td>80</td>
                                <td>85</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student04</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>60</td>
                                <td>55</td>
                                <td>100</td>
                                <td>100</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student05</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>68</td>
                                <td>80</td>
                                <td>95</td>
                                <td>80</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student06</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>100</td>
                                <td>99</td>
                                <td>100</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student07</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>85</td>
                                <td>68</td>
                                <td>90</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student08</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>100</td>
                                <td>90</td>
                                <td>90</td>
                                <td>85</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student09</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>80</td>
                                <td>50</td>
                                <td>65</td>
                                <td>75</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student10</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>85</td>
                                <td>100</td>
                                <td>100</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student11</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>86</td>
                                <td>85</td>
                                <td>100</td>
                                <td>100</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student12</td>
                                <td>Mathematics</td>
                                <td>female</td>
                                <td>100</td>
                                <td>75</td>
                                <td>70</td>
                                <td>85</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student13</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>100</td>
                                <td>80</td>
                                <td>100</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student14</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>50</td>
                                <td>45</td>
                                <td>55</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student15</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>95</td>
                                <td>35</td>
                                <td>100</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student16</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>100</td>
                                <td>50</td>
                                <td>30</td>
                                <td>70</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student17</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>80</td>
                                <td>100</td>
                                <td>55</td>
                                <td>65</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student18</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>30</td>
                                <td>49</td>
                                <td>55</td>
                                <td>75</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student19</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>68</td>
                                <td>90</td>
                                <td>88</td>
                                <td>70</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student20</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>40</td>
                                <td>45</td>
                                <td>40</td>
                                <td>80</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student21</td>
                                <td>Languages</td>
                                <td>male</td>
                                <td>50</td>
                                <td>45</td>
                                <td>100</td>
                                <td>100</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student22</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>100</td>
                                <td>99</td>
                                <td>100</td>
                                <td>90</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student23</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>82</td>
                                <td>77</td>
                                <td>0</td>
                                <td>79</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student24</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>100</td>
                                <td>91</td>
                                <td>13</td>
                                <td>82</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student25</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>22</td>
                                <td>96</td>
                                <td>82</td>
                                <td>53</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student26</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>37</td>
                                <td>29</td>
                                <td>56</td>
                                <td>59</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student27</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>86</td>
                                <td>82</td>
                                <td>69</td>
                                <td>23</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student28</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>44</td>
                                <td>25</td>
                                <td>43</td>
                                <td>1</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student29</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>77</td>
                                <td>47</td>
                                <td>22</td>
                                <td>38</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student30</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>19</td>
                                <td>35</td>
                                <td>23</td>
                                <td>10</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student31</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>90</td>
                                <td>27</td>
                                <td>17</td>
                                <td>50</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student32</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>60</td>
                                <td>75</td>
                                <td>33</td>
                                <td>38</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student33</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>4</td>
                                <td>31</td>
                                <td>37</td>
                                <td>15</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student34</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>77</td>
                                <td>97</td>
                                <td>81</td>
                                <td>44</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student35</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>5</td>
                                <td>81</td>
                                <td>51</td>
                                <td>95</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student36</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>70</td>
                                <td>61</td>
                                <td>70</td>
                                <td>94</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student37</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>60</td>
                                <td>3</td>
                                <td>61</td>
                                <td>84</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student38</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>63</td>
                                <td>39</td>
                                <td>0</td>
                                <td>11</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student39</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>50</td>
                                <td>46</td>
                                <td>32</td>
                                <td>38</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student40</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>51</td>
                                <td>75</td>
                                <td>25</td>
                                <td>3</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student41</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>43</td>
                                <td>34</td>
                                <td>28</td>
                                <td>78</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student42</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>11</td>
                                <td>89</td>
                                <td>60</td>
                                <td>95</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student43</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>48</td>
                                <td>92</td>
                                <td>18</td>
                                <td>88</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student44</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>82</td>
                                <td>2</td>
                                <td>59</td>
                                <td>73</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student45</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>91</td>
                                <td>73</td>
                                <td>37</td>
                                <td>39</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student46</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>4</td>
                                <td>8</td>
                                <td>12</td>
                                <td>10</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student47</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>89</td>
                                <td>10</td>
                                <td>6</td>
                                <td>11</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student48</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>90</td>
                                <td>32</td>
                                <td>21</td>
                                <td>18</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student49</td>
                                <td>Mathematics</td>
                                <td>male</td>
                                <td>42</td>
                                <td>49</td>
                                <td>49</td>
                                <td>72</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-md-icheck class="ts_checkbox"></td>
                                <td><img class="md-user-image" src="assets/img/avatars/avatar_<?php $randImg = rand(1,12); if($randImg<10) echo '0'; echo $randImg; ?>_tn.png" alt=""/></td>
                                <td>Student50</td>
                                <td>Languages</td>
                                <td>female</td>
                                <td>56</td>
                                <td>37</td>
                                <td>67</td>
                                <td>54</td>
                                <td class="uk-text-center">
                                    <a href="#" class="ts_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="uk-pagination ts_pager">
                        <li data-uk-tooltip title="Select Page">
                            <select class="ts_gotoPage ts_selectize"></select>
                        </li>
                        <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                        <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                        <li><span class="pagedisplay"></span></li>
                        <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                        <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                        <li data-uk-tooltip title="Page Size">
                            <select class="pagesize ts_selectize">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>

            <h4 class="heading_c uk-margin-large-top uk-margin-bottom">Align Character Widget</h4>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-hover uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_align">
                            <thead>
                                <tr>
                                    <th data-align-char="&nbsp;">AlphaNumeric</th>
                                    <th data-align-char="." data-align-adjust="0">Numeric</th>
                                    <th data-align-char="=" data-align-index="1">Animals</th>
                                    <th data-align-char="." data-align-index="2">Sites</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>abc 123</td>
                                    <td>.423475</td>
                                    <td>Koala = cute = cudley</td>
                                    <td>search.google.com</td>
                                </tr>
                                <tr>
                                    <td>abc 1</td>
                                    <td>23.4</td>
                                    <td>Ox = stinky</td>
                                    <td>mail.yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>abc 9</td>
                                    <td>1.0</td>
                                    <td>Girafee = tall</td>
                                    <td>http://www.facebook.com</td>
                                </tr>
                                <tr>
                                    <td>zyx 24</td>
                                    <td>7.67</td>
                                    <td>Bison = burger</td>
                                    <td>http://internship.whitehouse.gov/</td>
                                </tr>
                                <tr>
                                    <td>abc 11</td>
                                    <td>3000</td>
                                    <td>Chimp = banana lover</td>
                                    <td>about.ucla.edu/</td>
                                </tr>
                                <tr>
                                    <td>abc 2</td>
                                    <td>56.5</td>
                                    <td>Elephant = unforgetable</td>
                                    <td>http://www.wikipedia.org/</td>
                                </tr>
                                <tr>
                                    <td>abc 9</td>
                                    <td>15.5</td>
                                    <td>Lion = rawr</td>
                                    <td>rental.nytimes.com/index.html</td>
                                </tr>
                                <tr>
                                    <td>ABC 10</td>
                                    <td>87.20000</td>
                                    <td>Zebra = stripey</td>
                                    <td>http://android.google.com</td>
                                </tr>
                                <tr>
                                    <td>zyx 1</td>
                                    <td>999.1</td>
                                    <td>Koala = cute, again!</td>
                                    <td>http://irsmrt.mit.edu/</td>
                                </tr>
                                <tr>
                                    <td>zyx 12</td>
                                    <td>0.2</td>
                                    <td>Llama = llove it</td>
                                    <td>http://aliens.nasa.gov/</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
