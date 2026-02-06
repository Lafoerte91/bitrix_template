<?php

if($arResult['ITEMS']) {
  $arElementsIds = [];
  foreach($arResult['ITEMS'] as $arItem) {
    if(isset($arItem['ID'])) {
      $arElementsIds[] = $arItem['ID'];
    }
  }

  $dbSections = CIBlockElement::GetElementGroups($arElementsIds);
  $arSections = [];
  while($el = $dbSections->Fetch()) {
    $arSections[] = $el;
  }

  foreach($arResult['ITEMS'] as $itemKey => $arItem) {
    if(isset($arItem['IBLOCK_SECTON_ID'])) {
      $searchSectId = $arItem['IBLOCK_SECTON_ID'];
      foreach($arSections as $section) {
        if($section['ID'] == $searchSectId) {
          $arResult['ITEMS'][$itemKey]['SECTION_NAME'] = $section['NAME'];
        }
      }
    }

    if(!$arResult['ITEMS'][$itemKey]['SECTION_NAME']) {
      $arResult['ITEMS'][$itemKey]['SECTION_NAME'] = '';
    }

    if(isset($arItem['ID'])) {
      $arElementSectionCodes = [];
      foreach($arSections as $section) {
        if($arItem['ID'] == $section['IBLOCK_ELEMENT_ID']) {
          $arElementSectionCodes[] = $section['CODE'];
        }
      }

      $arResult['ITEMS'][$itemKey]['SECTIONS_CODES'] = implode(' ',  $arElementSectionCodes);
    } else {
      $arResult['ITEMS'][$itemKey]['SECTIONS_CODES'] = '';
    }
  }
}