### JCB! Power
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
  # int $id
  # string $guid
  # array $field
  # object $settings
  # array $view
  + __construct(Config $config, Power $power, ...)
  + set(string $langLabel, string $langView, ...) : void
  - applyTagBehaviour(string $typeName, string $nameSingleCode) : void
  - determineDbPersistence() : bool
  - configureDatabaseSchema(string $table, string $column, ...) : array
  - appearsInList() : bool
  - applyHistoryFlag(string $table) : void
  - applyAliasAndTitleFlags(bool $dbSwitch, string $table, ...) : void
  - resolveLangAndFieldNames(string $langLabel, string $langView, ...) : array
  - configureListsAndJoins(string $typeName, bool $listSwitch, ...) : void
  - synchroniseFieldRelations(string $nameListCode, string $typeName, ...) : void
  - applyTypeSpecificBuilders(bool $dbSwitch, string $typeName, ...) : ?string
  - handleStoreBehaviour(string $typeName, string $table, ...) : ?string
  - configureCategoryField(string $nameListCode, string $nameSingleCode, ...) : void
  - configureSortSearchFilter(bool $dbSwitch, string $typeName, ...) : void
  - configureLayoutAndComponentField(bool $dbSwitch, string $nameSingleCode, ...) : void
  - normalizeDatabaseValues(string $nameSingleCode, string $name, ...) : ?array
  - setLinkerRelations(array $link) : ?array
  - init(array $view, array $field) : void
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

note left of Builders::set
  Configure a field, its database schema, list/view behaviour,
multilingual labels and every other builder that depends on the
field definition.

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

note right of Builders::applyTagBehaviour
  Add Tags-builder entry if the field type is “tag”.

  since: 5.1.1
  return: void
end note

note left of Builders::determineDbPersistence
  Decide whether the field should be persisted to the database table.
Fields explicitly marked with 'list' = 2 are excluded from persistence.
All other cases (including when 'list' is not set) result in persistence.

  since: 5.1.1
  return: bool
end note

note right of Builders::configureDatabaseSchema
  Populate $this->databasetables, unique/key builders and numeric defaults.

  since: 5.1.1
  return: array
  
  arguments:
    string $table
    string $column
    string $typeName
end note

note left of Builders::appearsInList
  Check whether a field should appear in the list view.

  since: 5.1.1
  return: bool
end note

note right of Builders::applyHistoryFlag
  Activate history tracking for a view when enabled.

  since: 5.1.1
  return: void
end note

note left of Builders::applyAliasAndTitleFlags
  Ensure view-singleton alias/title markers are registered once.

  since: 5.1.1
  return: void
  
  arguments:
    bool $dbSwitch
    string $table
    string $column
end note

note right of Builders::resolveLangAndFieldNames
  Resolve list-language key and human-readable field name, inserting
translation entries when necessary.

  since: 5.1.1
  return: array
  
  arguments:
    string $langLabel
    string $langView
    string $name
    string $nameListCode
    string $nameSingleCode
    string $typeName
end note

note left of Builders::configureListsAndJoins
  Populate list-, customlist- and listjoin-builders.

  since: 5.1.1
  return: void
  
  arguments:
    string $typeName
    bool $listSwitch
    bool $listJoin
    string $nameListCode
    string $nameSingleCode
    string $name
    string $listLangName
    bool $multiple
    ?array $custom
    ?array $options
end note

note right of Builders::synchroniseFieldRelations
  Update $this->fieldrelations after full meta is known.

  since: 5.1.1
  return: void
  
  arguments:
    string $nameListCode
    string $typeName
    string $name
    ?array $custom
end note

note left of Builders::applyTypeSpecificBuilders
  Register hidden/int/dynamic/editor/media/checkbox/custom/JSON/encryption
builders and ItemMethods housekeeping.

  since: 5.1.1
  return: ?string
  
  arguments:
    bool $dbSwitch
    string $typeName
    string $listLangName
    string $nameListCode
    string $nameSingleCode
    string $column
    ?array $custom
    bool $multiple
    bool $listSwitch
    bool $listJoin
    ?array $options
end note

note right of Builders::handleStoreBehaviour
  Handle storage-mode specific behaviour (JSON, Base64, encryption, expert).

  since: 5.1.1
  return: ?string
  
  arguments:
    string $typeName
    string $table
    string $column
    ?array $custom
    bool $inList
    ?array $options
end note

note left of Builders::configureCategoryField
  Validate category field attributes, show mismatch warning and
populate category builders.

  since: 5.1.1
  return: void
  
  arguments:
    string $nameListCode
    string $nameSingleCode
    string $column
    string $listLangName
end note

note right of Builders::configureSortSearchFilter
  Build sort, search, filter options and associated language strings.

  since: 5.1.1
  return: void
  
  arguments:
    bool $dbSwitch
    string $typeName
    bool $multiple
    bool $listSwitch
    bool $listJoin
    string $langLabel
    string $listLangName
    string $listFieldName
    string $nameSingleCode
    string $nameListCode
    string $column
    ?array $custom
    ?array $options
end note

note left of Builders::configureLayoutAndComponentField
  Decide tab placement, push data into $this->layout and finalise
$this->componentfields map.

  since: 5.1.1
  return: void
  
  arguments:
    bool $dbSwitch
    string $nameSingleCode
    string $column
    string $typeName
    bool $uniqueKey
    bool $key
    string $langLabel
    string $nameListCode
    ?string $storeString
    ?array $custom
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

note left of Builders::setLinkerRelations
  Sets the linker relations for a field based on the provided link data.
The method determines the type of link relation based on the presence of a table.
If no table is provided, it assigns a type 2 with a null table, otherwise it assigns type 1.
It also extracts additional values from the input array, such as component, entity, value, and key.

  since: 5.0.3
  return: ?array
end note

note right of Builders::init
  Initialise this field

  since: 5.1.1
  return: void
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---55278140_80d5_4168_8241_d64515c4b35e---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")