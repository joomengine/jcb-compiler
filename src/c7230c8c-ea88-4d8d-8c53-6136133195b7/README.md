```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class BuilderAJ (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class BuilderAJ  #Gold {
  + register(Container $container) : void
  + getAccessSwitch(Container $container) : AccessSwitch
  + getAccessSwitchList(Container $container) : AccessSwitchList
  + getAssetsRules(Container $container) : AssetsRules
  + getAdminFilterType(Container $container) : AdminFilterType
  + getAlias(Container $container) : Alias
  + getBaseSixFour(Container $container) : BaseSixFour
  + getCategory(Container $container) : Category
  + getCategoryCode(Container $container) : CategoryCode
  + getCategoryOtherName(Container $container) : CategoryOtherName
  + getCheckBox(Container $container) : CheckBox
  + getComponentFields(Container $container) : ComponentFields
  + getConfigFieldsets(Container $container) : ConfigFieldsets
  + getConfigFieldsetsCustomfield(Container $container) : ConfigFieldsetsCustomfield
  + getContentMulti(Container $container) : ContentMulti
  + getContentOne(Container $container) : ContentOne
  + getContributors(Container $container) : Contributors
  + getCustomAlias(Container $container) : CustomAlias
  + getCustomField(Container $container) : CustomField
  + getCustomFieldLinks(Container $container) : CustomFieldLinks
  + getCustomList(Container $container) : CustomList
  + getCustomTabs(Container $container) : CustomTabs
  + getDatabaseKeys(Container $container) : DatabaseKeys
  + getDatabaseTables(Container $container) : DatabaseTables
  + getDatabaseUniqueGuid(Container $container) : DatabaseUniqueGuid
  + getDatabaseUniqueKeys(Container $container) : DatabaseUniqueKeys
  + getDatabaseUninstall(Container $container) : DatabaseUninstall
  + getDoNotEscape(Container $container) : DoNotEscape
  + getDynamicFields(Container $container) : DynamicFields
  + getExtensionCustomFields(Container $container) : ExtensionCustomFields
  + getExtensionsParams(Container $container) : ExtensionsParams
  + getFieldGroupControl(Container $container) : FieldGroupControl
  + getFieldNames(Container $container) : FieldNames
  + getFieldRelations(Container $container) : FieldRelations
  + getFilter(Container $container) : Filter
  + getFootableScripts(Container $container) : FootableScripts
  + getFrontendParams(Container $container) : FrontendParams
  + getGetAsLookup(Container $container) : GetAsLookup
  + getGetModule(Container $container) : GetModule
  + getGoogleChart(Container $container) : GoogleChart
  + getHasMenuGlobal(Container $container) : HasMenuGlobal
  + getHasPermissions(Container $container) : HasPermissions
  + getHiddenFields(Container $container) : HiddenFields
  + getHistory(Container $container) : History
  + getIntegerFields(Container $container) : IntegerFields
  + getItemsMethodEximportString(Container $container) : ItemsMethodEximportString
  + getItemsMethodListString(Container $container) : ItemsMethodListString
  + getJsonItem(Container $container) : JsonItem
  + getJsonItemArray(Container $container) : JsonItemArray
  + getJsonString(Container $container) : JsonString
}

note right of BuilderAJ::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of BuilderAJ::getAccessSwitch
  Get The AccessSwitch Class.

  since: 3.2.0
  return: AccessSwitch
end note

note right of BuilderAJ::getAccessSwitchList
  Get The AccessSwitchList Class.

  since: 3.2.0
  return: AccessSwitchList
end note

note left of BuilderAJ::getAssetsRules
  Get The AssetsRules Class.

  since: 3.2.0
  return: AssetsRules
end note

note right of BuilderAJ::getAdminFilterType
  Get The AdminFilterType Class.

  since: 3.2.0
  return: AdminFilterType
end note

note left of BuilderAJ::getAlias
  Get The Alias Class.

  since: 3.2.0
  return: Alias
end note

note right of BuilderAJ::getBaseSixFour
  Get The BaseSixFour Class.

  since: 3.2.0
  return: BaseSixFour
end note

note left of BuilderAJ::getCategory
  Get The Category Class.

  since: 3.2.0
  return: Category
end note

note right of BuilderAJ::getCategoryCode
  Get The CategoryCode Class.

  since: 3.2.0
  return: CategoryCode
end note

note left of BuilderAJ::getCategoryOtherName
  Get The CategoryOtherName Class.

  since: 3.2.0
  return: CategoryOtherName
end note

note right of BuilderAJ::getCheckBox
  Get The CheckBox Class.

  since: 3.2.0
  return: CheckBox
end note

note left of BuilderAJ::getComponentFields
  Get The ComponentFields Class.

  since: 3.2.0
  return: ComponentFields
end note

note right of BuilderAJ::getConfigFieldsets
  Get The ConfigFieldsets Class.

  since: 3.2.0
  return: ConfigFieldsets
end note

note left of BuilderAJ::getConfigFieldsetsCustomfield
  Get The ConfigFieldsetsCustomfield Class.

  since: 3.2.0
  return: ConfigFieldsetsCustomfield
end note

note right of BuilderAJ::getContentMulti
  Get The ContentMulti Class.

  since: 3.2.0
  return: ContentMulti
end note

note left of BuilderAJ::getContentOne
  Get The ContentOne Class.

  since: 3.2.0
  return: ContentOne
end note

note right of BuilderAJ::getContributors
  Get The Contributors Class.

  since: 3.2.0
  return: Contributors
end note

note left of BuilderAJ::getCustomAlias
  Get The CustomAlias Class.

  since: 3.2.0
  return: CustomAlias
end note

note right of BuilderAJ::getCustomField
  Get The CustomField Class.

  since: 3.2.0
  return: CustomField
end note

note left of BuilderAJ::getCustomFieldLinks
  Get The CustomFieldLinks Class.

  since: 3.2.0
  return: CustomFieldLinks
end note

note right of BuilderAJ::getCustomList
  Get The CustomList Class.

  since: 3.2.0
  return: CustomList
end note

note left of BuilderAJ::getCustomTabs
  Get The CustomTabs Class.

  since: 3.2.0
  return: CustomTabs
end note

note right of BuilderAJ::getDatabaseKeys
  Get The DatabaseKeys Class.

  since: 3.2.0
  return: DatabaseKeys
end note

note left of BuilderAJ::getDatabaseTables
  Get The DatabaseTables Class.

  since: 3.2.0
  return: DatabaseTables
end note

note right of BuilderAJ::getDatabaseUniqueGuid
  Get The DatabaseUniqueGuid Class.

  since: 3.2.0
  return: DatabaseUniqueGuid
end note

note left of BuilderAJ::getDatabaseUniqueKeys
  Get The DatabaseUniqueKeys Class.

  since: 3.2.0
  return: DatabaseUniqueKeys
end note

note right of BuilderAJ::getDatabaseUninstall
  Get The DatabaseUninstall Class.

  since: 3.2.0
  return: DatabaseUninstall
end note

note left of BuilderAJ::getDoNotEscape
  Get The DoNotEscape Class.

  since: 3.2.0
  return: DoNotEscape
end note

note right of BuilderAJ::getDynamicFields
  Get The DynamicFields Class.

  since: 3.2.0
  return: DynamicFields
end note

note left of BuilderAJ::getExtensionCustomFields
  Get The ExtensionCustomFields Class.

  since: 3.2.0
  return: ExtensionCustomFields
end note

note right of BuilderAJ::getExtensionsParams
  Get The ExtensionsParams Class.

  since: 3.2.0
  return: ExtensionsParams
end note

note left of BuilderAJ::getFieldGroupControl
  Get The FieldGroupControl Class.

  since: 3.2.0
  return: FieldGroupControl
end note

note right of BuilderAJ::getFieldNames
  Get The FieldNames Class.

  since: 3.2.0
  return: FieldNames
end note

note left of BuilderAJ::getFieldRelations
  Get The FieldRelations Class.

  since: 3.2.0
  return: FieldRelations
end note

note right of BuilderAJ::getFilter
  Get The Filter Class.

  since: 3.2.0
  return: Filter
end note

note left of BuilderAJ::getFootableScripts
  Get The FootableScripts Class.

  since: 3.2.0
  return: FootableScripts
end note

note right of BuilderAJ::getFrontendParams
  Get The FrontendParams Class.

  since: 3.2.0
  return: FrontendParams
end note

note left of BuilderAJ::getGetAsLookup
  Get The GetAsLookup Class.

  since: 3.2.0
  return: GetAsLookup
end note

note right of BuilderAJ::getGetModule
  Get The GetModule Class.

  since: 3.2.0
  return: GetModule
end note

note left of BuilderAJ::getGoogleChart
  Get The GoogleChart Class.

  since: 3.2.0
  return: GoogleChart
end note

note right of BuilderAJ::getHasMenuGlobal
  Get The HasMenuGlobal Class.

  since: 3.2.0
  return: HasMenuGlobal
end note

note left of BuilderAJ::getHasPermissions
  Get The HasPermissions Class.

  since: 3.2.0
  return: HasPermissions
end note

note right of BuilderAJ::getHiddenFields
  Get The HiddenFields Class.

  since: 3.2.0
  return: HiddenFields
end note

note left of BuilderAJ::getHistory
  Get The History Class.

  since: 3.2.0
  return: History
end note

note right of BuilderAJ::getIntegerFields
  Get The IntegerFields Class.

  since: 3.2.0
  return: IntegerFields
end note

note left of BuilderAJ::getItemsMethodEximportString
  Get The ItemsMethodEximportString Class.

  since: 3.2.0
  return: ItemsMethodEximportString
end note

note right of BuilderAJ::getItemsMethodListString
  Get The ItemsMethodListString Class.

  since: 3.2.0
  return: ItemsMethodListString
end note

note left of BuilderAJ::getJsonItem
  Get The JsonItem Class.

  since: 3.2.0
  return: JsonItem
end note

note right of BuilderAJ::getJsonItemArray
  Get The JsonItemArray Class.

  since: 3.2.0
  return: JsonItemArray
end note

note left of BuilderAJ::getJsonString
  Get The JsonString Class.

  since: 3.2.0
  return: JsonString
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

