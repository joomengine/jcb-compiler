```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Builders (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class Builders << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Power $power
  # Language $language
  # Placeholder $placeholder
  # Layout $layout
  # SiteFieldData $sitefielddata
  # Tags $tags
  # DatabaseTables $databasetables
  # DatabaseUniqueKeys $databaseuniquekeys
  # DatabaseKeys $databasekeys
  # DatabaseUniqueGuid $databaseuniqueguid
  # ListJoin $listjoin
  # History $history
  # Alias $alias
  # Title $title
  # CategoryOtherName $categoryothername
  # Lists $lists
  # CustomList $customlist
  # FieldRelations $fieldrelations
  # HiddenFields $hiddenfields
  # IntegerFields $integerfields
  # DynamicFields $dynamicfields
  # MainTextField $maintextfield
  # CustomField $customfield
  # CustomFieldLinks $customfieldlinks
  # ScriptUserSwitch $scriptuserswitch
  # ScriptMediaSwitch $scriptmediaswitch
  # Category $category
  # CategoryCode $categorycode
  # CheckBox $checkbox
  # JsonString $jsonstring
  # BaseSixFour $basesixfour
  # ModelBasicField $modelbasicfield
  # ModelWhmcsField $modelwhmcsfield
  # ModelMediumField $modelmediumfield
  # ModelExpertFieldInitiator $modelexpertfieldinitiator
  # ModelExpertField $modelexpertfield
  # JsonItem $jsonitem
  # ItemsMethodListString $itemsmethodliststring
  # JsonItemArray $jsonitemarray
  # ItemsMethodEximportString $itemsmethodeximportstring
  # SelectionTranslation $selectiontranslation
  # AdminFilterType $adminfiltertype
  # Sort $sort
  # Search $search
  # Filter $filter
  # ComponentFields $componentfields
  # CMSApplication $app
  + __construct(Config $config, Power $power, ...)
  + set(string $langLabel, string $langView, ...) : void
  - normalizeDatabaseValues(string $nameSingleCode, string $name, ...) : ?array
}

note right of Builders::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Power $power
    Language $language
    Placeholder $placeholder
    Layout $layout
    SiteFieldData $sitefielddata
    Tags $tags
    DatabaseTables $databasetables
    DatabaseUniqueKeys $databaseuniquekeys
    DatabaseKeys $databasekeys
    DatabaseUniqueGuid $databaseuniqueguid
    ListJoin $listjoin
    History $history
    Alias $alias
    Title $title
    CategoryOtherName $categoryothername
    Lists $lists
    CustomList $customlist
    FieldRelations $fieldrelations
    HiddenFields $hiddenfields
    IntegerFields $integerfields
    DynamicFields $dynamicfields
    MainTextField $maintextfield
    CustomField $customfield
    CustomFieldLinks $customfieldlinks
    ScriptUserSwitch $scriptuserswitch
    ScriptMediaSwitch $scriptmediaswitch
    Category $category
    CategoryCode $categorycode
    CheckBox $checkbox
    JsonString $jsonstring
    BaseSixFour $basesixfour
    ModelBasicField $modelbasicfield
    ModelWhmcsField $modelwhmcsfield
    ModelMediumField $modelmediumfield
    ModelExpertFieldInitiator $modelexpertfieldinitiator
    ModelExpertField $modelexpertfield
    JsonItem $jsonitem
    ItemsMethodListString $itemsmethodliststring
    JsonItemArray $jsonitemarray
    ItemsMethodEximportString $itemsmethodeximportstring
    SelectionTranslation $selectiontranslation
    AdminFilterType $adminfiltertype
    Sort $sort
    Search $search
    Filter $filter
    ComponentFields $componentfields
    ?CMSApplication $app = null
end note

note right of Builders::set
  set Builders

  since: 3.2.0
  return: void
  
  arguments:
    string $langLabel
    string $langView
    string $nameSingleCode
    string $nameListCode
    string $name
    array $view
    array $field
    string $typeName
    bool $multiple
    ?array $custom = null
    ?array $options = null
end note

note right of Builders::normalizeDatabaseValues
  Normalizes database values by adjusting the 'length' and 'default' fields based on specific conditions.
This function modifies the database values by replacing placeholder texts and appending specifications
to types based on the 'length' field. It removes unnecessary fields from the result array.

  since: 3.2.1
  return: ?array
  
  arguments:
    string $nameSingleCode
    string $name
    string $uniquekey
    string $iskey
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

