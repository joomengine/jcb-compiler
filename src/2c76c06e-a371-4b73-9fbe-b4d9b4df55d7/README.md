```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Builder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Builder  #Gold {
  + register(Container $container) : void
  + getAccessSwitch(Container $container) : AccessSwitch
  + getAccessSwitchList(Container $container) : AccessSwitchList
  + getAdminFilterType(Container $container) : AdminFilterType
  + getAlias(Container $container) : Alias
  + getBaseSixFour(Container $container) : BaseSixFour
  + getCategory(Container $container) : Category
  + getCategoryCode(Container $container) : CategoryCode
  + getCategoryOtherName(Container $container) : CategoryOtherName
  + getCheckBox(Container $container) : CheckBox
  + getComponentFields(Container $container) : ComponentFields
  + getContentMulti(Container $container) : ContentMulti
  + getContentOne(Container $container) : ContentOne
  + getCustomAlias(Container $container) : CustomAlias
  + getCustomField(Container $container) : CustomField
  + getCustomFieldLinks(Container $container) : CustomFieldLinks
  + getCustomList(Container $container) : CustomList
  + getCustomTabs(Container $container) : CustomTabs
  + getDatabaseKeys(Container $container) : DatabaseKeys
  + getDatabaseTables(Container $container) : DatabaseTables
  + getDatabaseUniqueGuid(Container $container) : DatabaseUniqueGuid
  + getDatabaseUniqueKeys(Container $container) : DatabaseUniqueKeys
  + getDoNotEscape(Container $container) : DoNotEscape
  + getDynamicFields(Container $container) : DynamicFields
  + getExtensionCustomFields(Container $container) : ExtensionCustomFields
  + getFieldGroupControl(Container $container) : FieldGroupControl
  + getFieldNames(Container $container) : FieldNames
  + getFieldRelations(Container $container) : FieldRelations
  + getFilter(Container $container) : Filter
  + getFootableScripts(Container $container) : FootableScripts
  + getGetAsLookup(Container $container) : GetAsLookup
  + getGetModule(Container $container) : GetModule
  + getGoogleChart(Container $container) : GoogleChart
  + getHasPermissions(Container $container) : HasPermissions
  + getHiddenFields(Container $container) : HiddenFields
  + getHistory(Container $container) : History
  + getIntegerFields(Container $container) : IntegerFields
  + getItemsMethodEximportString(Container $container) : ItemsMethodEximportString
  + getItemsMethodListString(Container $container) : ItemsMethodListString
  + getJsonItem(Container $container) : JsonItem
  + getJsonItemArray(Container $container) : JsonItemArray
  + getJsonString(Container $container) : JsonString
  + getLayout(Container $container) : Layout
  + getLayoutData(Container $container) : LayoutData
  + getLibraryManager(Container $container) : LibraryManager
  + getListFieldClass(Container $container) : ListFieldClass
  + getListHeadOverride(Container $container) : ListHeadOverride
  + getListJoin(Container $container) : ListJoin
  + getLists(Container $container) : Lists
  + getMainTextField(Container $container) : MainTextField
  + getMetaData(Container $container) : MetaData
  + getModelBasicField(Container $container) : ModelBasicField
  + getModelExpertField(Container $container) : ModelExpertField
  + getModelExpertFieldInitiator(Container $container) : ModelExpertFieldInitiator
  + getModelMediumField(Container $container) : ModelMediumField
  + getModelWhmcsField(Container $container) : ModelWhmcsField
  + getMovedPublishingFields(Container $container) : MovedPublishingFields
  + getMysqlTableSetting(Container $container) : MysqlTableSetting
  + getNewPublishingFields(Container $container) : NewPublishingFields
  + getOrderZero(Container $container) : OrderZero
  + getOtherFilter(Container $container) : OtherFilter
  + getOtherGroup(Container $container) : OtherGroup
  + getOtherJoin(Container $container) : OtherJoin
  + getOtherOrder(Container $container) : OtherOrder
  + getOtherQuery(Container $container) : OtherQuery
  + getOtherWhere(Container $container) : OtherWhere
  + getPermissionAction(Container $container) : PermissionAction
  + getPermissionComponent(Container $container) : PermissionComponent
  + getPermissionCore(Container $container) : PermissionCore
  + getPermissionDashboard(Container $container) : PermissionDashboard
  + getPermissionGlobalAction(Container $container) : PermissionGlobalAction
  + getPermissionViews(Container $container) : PermissionViews
  + getScriptMediaSwitch(Container $container) : ScriptMediaSwitch
  + getScriptUserSwitch(Container $container) : ScriptUserSwitch
  + getSearch(Container $container) : Search
  + getSelectionTranslation(Container $container) : SelectionTranslation
  + getSiteDecrypt(Container $container) : SiteDecrypt
  + getSiteDynamicGet(Container $container) : SiteDynamicGet
  + getSiteEditView(Container $container) : SiteEditView
  + getSiteFieldData(Container $container) : SiteFieldData
  + getSiteFieldDecodeFilter(Container $container) : SiteFieldDecodeFilter
  + getSiteFields(Container $container) : SiteFields
  + getSiteMainGet(Container $container) : SiteMainGet
  + getSort(Container $container) : Sort
  + getTabCounter(Container $container) : TabCounter
  + getTags(Container $container) : Tags
  + getTemplateData(Container $container) : TemplateData
  + getTitle(Container $container) : Title
  + getUikitComp(Container $container) : UikitComp
  + getUpdateMysql(Container $container) : UpdateMysql
}

note right of Builder::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Builder::getAccessSwitch
  Get The AccessSwitch Class.

  since: 3.2.0
  return: AccessSwitch
end note

note right of Builder::getAccessSwitchList
  Get The AccessSwitchList Class.

  since: 3.2.0
  return: AccessSwitchList
end note

note left of Builder::getAdminFilterType
  Get The AdminFilterType Class.

  since: 3.2.0
  return: AdminFilterType
end note

note right of Builder::getAlias
  Get The Alias Class.

  since: 3.2.0
  return: Alias
end note

note left of Builder::getBaseSixFour
  Get The BaseSixFour Class.

  since: 3.2.0
  return: BaseSixFour
end note

note right of Builder::getCategory
  Get The Category Class.

  since: 3.2.0
  return: Category
end note

note left of Builder::getCategoryCode
  Get The CategoryCode Class.

  since: 3.2.0
  return: CategoryCode
end note

note right of Builder::getCategoryOtherName
  Get The CategoryOtherName Class.

  since: 3.2.0
  return: CategoryOtherName
end note

note left of Builder::getCheckBox
  Get The CheckBox Class.

  since: 3.2.0
  return: CheckBox
end note

note right of Builder::getComponentFields
  Get The ComponentFields Class.

  since: 3.2.0
  return: ComponentFields
end note

note left of Builder::getContentMulti
  Get The ContentMulti Class.

  since: 3.2.0
  return: ContentMulti
end note

note right of Builder::getContentOne
  Get The ContentOne Class.

  since: 3.2.0
  return: ContentOne
end note

note left of Builder::getCustomAlias
  Get The CustomAlias Class.

  since: 3.2.0
  return: CustomAlias
end note

note right of Builder::getCustomField
  Get The CustomField Class.

  since: 3.2.0
  return: CustomField
end note

note left of Builder::getCustomFieldLinks
  Get The CustomFieldLinks Class.

  since: 3.2.0
  return: CustomFieldLinks
end note

note right of Builder::getCustomList
  Get The CustomList Class.

  since: 3.2.0
  return: CustomList
end note

note left of Builder::getCustomTabs
  Get The CustomTabs Class.

  since: 3.2.0
  return: CustomTabs
end note

note right of Builder::getDatabaseKeys
  Get The DatabaseKeys Class.

  since: 3.2.0
  return: DatabaseKeys
end note

note left of Builder::getDatabaseTables
  Get The DatabaseTables Class.

  since: 3.2.0
  return: DatabaseTables
end note

note right of Builder::getDatabaseUniqueGuid
  Get The DatabaseUniqueGuid Class.

  since: 3.2.0
  return: DatabaseUniqueGuid
end note

note left of Builder::getDatabaseUniqueKeys
  Get The DatabaseUniqueKeys Class.

  since: 3.2.0
  return: DatabaseUniqueKeys
end note

note right of Builder::getDoNotEscape
  Get The DoNotEscape Class.

  since: 3.2.0
  return: DoNotEscape
end note

note left of Builder::getDynamicFields
  Get The DynamicFields Class.

  since: 3.2.0
  return: DynamicFields
end note

note right of Builder::getExtensionCustomFields
  Get The ExtensionCustomFields Class.

  since: 3.2.0
  return: ExtensionCustomFields
end note

note left of Builder::getFieldGroupControl
  Get The FieldGroupControl Class.

  since: 3.2.0
  return: FieldGroupControl
end note

note right of Builder::getFieldNames
  Get The FieldNames Class.

  since: 3.2.0
  return: FieldNames
end note

note left of Builder::getFieldRelations
  Get The FieldRelations Class.

  since: 3.2.0
  return: FieldRelations
end note

note right of Builder::getFilter
  Get The Filter Class.

  since: 3.2.0
  return: Filter
end note

note left of Builder::getFootableScripts
  Get The FootableScripts Class.

  since: 3.2.0
  return: FootableScripts
end note

note right of Builder::getGetAsLookup
  Get The GetAsLookup Class.

  since: 3.2.0
  return: GetAsLookup
end note

note left of Builder::getGetModule
  Get The GetModule Class.

  since: 3.2.0
  return: GetModule
end note

note right of Builder::getGoogleChart
  Get The GoogleChart Class.

  since: 3.2.0
  return: GoogleChart
end note

note left of Builder::getHasPermissions
  Get The HasPermissions Class.

  since: 3.2.0
  return: HasPermissions
end note

note right of Builder::getHiddenFields
  Get The HiddenFields Class.

  since: 3.2.0
  return: HiddenFields
end note

note left of Builder::getHistory
  Get The History Class.

  since: 3.2.0
  return: History
end note

note right of Builder::getIntegerFields
  Get The IntegerFields Class.

  since: 3.2.0
  return: IntegerFields
end note

note left of Builder::getItemsMethodEximportString
  Get The ItemsMethodEximportString Class.

  since: 3.2.0
  return: ItemsMethodEximportString
end note

note right of Builder::getItemsMethodListString
  Get The ItemsMethodListString Class.

  since: 3.2.0
  return: ItemsMethodListString
end note

note left of Builder::getJsonItem
  Get The JsonItem Class.

  since: 3.2.0
  return: JsonItem
end note

note right of Builder::getJsonItemArray
  Get The JsonItemArray Class.

  since: 3.2.0
  return: JsonItemArray
end note

note left of Builder::getJsonString
  Get The JsonString Class.

  since: 3.2.0
  return: JsonString
end note

note right of Builder::getLayout
  Get The Layout Class.

  since: 3.2.0
  return: Layout
end note

note left of Builder::getLayoutData
  Get The LayoutData Class.

  since: 3.2.0
  return: LayoutData
end note

note right of Builder::getLibraryManager
  Get The LibraryManager Class.

  since: 3.2.0
  return: LibraryManager
end note

note left of Builder::getListFieldClass
  Get The ListFieldClass Class.

  since: 3.2.0
  return: ListFieldClass
end note

note right of Builder::getListHeadOverride
  Get The ListHeadOverride Class.

  since: 3.2.0
  return: ListHeadOverride
end note

note left of Builder::getListJoin
  Get The ListJoin Class.

  since: 3.2.0
  return: ListJoin
end note

note right of Builder::getLists
  Get The Lists Class.

  since: 3.2.0
  return: Lists
end note

note left of Builder::getMainTextField
  Get The MainTextField Class.

  since: 3.2.0
  return: MainTextField
end note

note right of Builder::getMetaData
  Get The MetaData Class.

  since: 3.2.0
  return: MetaData
end note

note left of Builder::getModelBasicField
  Get The ModelBasicField Class.

  since: 3.2.0
  return: ModelBasicField
end note

note right of Builder::getModelExpertField
  Get The ModelExpertField Class.

  since: 3.2.0
  return: ModelExpertField
end note

note left of Builder::getModelExpertFieldInitiator
  Get The ModelExpertFieldInitiator Class.

  since: 3.2.0
  return: ModelExpertFieldInitiator
end note

note right of Builder::getModelMediumField
  Get The ModelMediumField Class.

  since: 3.2.0
  return: ModelMediumField
end note

note left of Builder::getModelWhmcsField
  Get The ModelWhmcsField Class.

  since: 3.2.0
  return: ModelWhmcsField
end note

note right of Builder::getMovedPublishingFields
  Get The MovedPublishingFields Class.

  since: 3.2.0
  return: MovedPublishingFields
end note

note left of Builder::getMysqlTableSetting
  Get The MysqlTableSetting Class.

  since: 3.2.0
  return: MysqlTableSetting
end note

note right of Builder::getNewPublishingFields
  Get The NewPublishingFields Class.

  since: 3.2.0
  return: NewPublishingFields
end note

note left of Builder::getOrderZero
  Get The OrderZero Class.

  since: 3.2.0
  return: OrderZero
end note

note right of Builder::getOtherFilter
  Get The OtherFilter Class.

  since: 3.2.0
  return: OtherFilter
end note

note left of Builder::getOtherGroup
  Get The OtherGroup Class.

  since: 3.2.0
  return: OtherGroup
end note

note right of Builder::getOtherJoin
  Get The OtherJoin Class.

  since: 3.2.0
  return: OtherJoin
end note

note left of Builder::getOtherOrder
  Get The OtherOrder Class.

  since: 3.2.0
  return: OtherOrder
end note

note right of Builder::getOtherQuery
  Get The OtherQuery Class.

  since: 3.2.0
  return: OtherQuery
end note

note left of Builder::getOtherWhere
  Get The OtherWhere Class.

  since: 3.2.0
  return: OtherWhere
end note

note right of Builder::getPermissionAction
  Get The PermissionAction Class.

  since: 3.2.0
  return: PermissionAction
end note

note left of Builder::getPermissionComponent
  Get The PermissionComponent Class.

  since: 3.2.0
  return: PermissionComponent
end note

note right of Builder::getPermissionCore
  Get The PermissionCore Class.

  since: 3.2.0
  return: PermissionCore
end note

note left of Builder::getPermissionDashboard
  Get The PermissionDashboard Class.

  since: 3.2.0
  return: PermissionDashboard
end note

note right of Builder::getPermissionGlobalAction
  Get The PermissionGlobalAction Class.

  since: 3.2.0
  return: PermissionGlobalAction
end note

note left of Builder::getPermissionViews
  Get The PermissionViews Class.

  since: 3.2.0
  return: PermissionViews
end note

note right of Builder::getScriptMediaSwitch
  Get The ScriptMediaSwitch Class.

  since: 3.2.0
  return: ScriptMediaSwitch
end note

note left of Builder::getScriptUserSwitch
  Get The ScriptUserSwitch Class.

  since: 3.2.0
  return: ScriptUserSwitch
end note

note right of Builder::getSearch
  Get The Search Class.

  since: 3.2.0
  return: Search
end note

note left of Builder::getSelectionTranslation
  Get The SelectionTranslation Class.

  since: 3.2.0
  return: SelectionTranslation
end note

note right of Builder::getSiteDecrypt
  Get The SiteDecrypt Class.

  since: 3.2.0
  return: SiteDecrypt
end note

note left of Builder::getSiteDynamicGet
  Get The SiteDynamicGet Class.

  since: 3.2.0
  return: SiteDynamicGet
end note

note right of Builder::getSiteEditView
  Get The SiteEditView Class.

  since: 3.2.0
  return: SiteEditView
end note

note left of Builder::getSiteFieldData
  Get The SiteFieldData Class.

  since: 3.2.0
  return: SiteFieldData
end note

note right of Builder::getSiteFieldDecodeFilter
  Get The SiteFieldDecodeFilter Class.

  since: 3.2.0
  return: SiteFieldDecodeFilter
end note

note left of Builder::getSiteFields
  Get The SiteFields Class.

  since: 3.2.0
  return: SiteFields
end note

note right of Builder::getSiteMainGet
  Get The SiteMainGet Class.

  since: 3.2.0
  return: SiteMainGet
end note

note left of Builder::getSort
  Get The Sort Class.

  since: 3.2.0
  return: Sort
end note

note right of Builder::getTabCounter
  Get The TabCounter Class.

  since: 3.2.0
  return: TabCounter
end note

note left of Builder::getTags
  Get The Tags Class.

  since: 3.2.0
  return: Tags
end note

note right of Builder::getTemplateData
  Get The TemplateData Class.

  since: 3.2.0
  return: TemplateData
end note

note left of Builder::getTitle
  Get The Title Class.

  since: 3.2.0
  return: Title
end note

note right of Builder::getUikitComp
  Get The UikitComp Class.

  since: 3.2.0
  return: UikitComp
end note

note left of Builder::getUpdateMysql
  Get The UpdateMysql Class.

  since: 3.2.0
  return: UpdateMysql
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

