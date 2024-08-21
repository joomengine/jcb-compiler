```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Set (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Remote**
> extends: **ExtendingSet**

```uml
@startuml
class Set << (F,LightGreen) >> #RoyalBlue {
  # string $table
  # string $area
  # array $map
  # ?Parser $parser
  + __construct(array $repos, Grep $grep, ...)
  # mapItemValue_extends(array $item, $power) : void
  # mapItemValue_extendsinterfaces(array $item, $power) : void
  # mapItemValue_use_selection(array $item, $power) : void
  # mapItemValue_load_selection(array $item, $power) : void
  # mapItemValue_composer(array $item, $power) : void
  # mapItemValue_implements(array $item, $power) : void
  # updateItem(object $item, object $existing, ...) : bool
  # updatePower(object $item, object $existing, ...) : bool
  # createItem(object $item, object $repo) : void
  # createPower(object $item, object $repo) : void
  # updateItemReadme(object $item, object $existing, ...) : void
  # createItemReadme(object $item, object $repo) : void
  # targetRepo(object $item, object $repo) : bool
  # index_map_IndexName(object $item) : ?string
  # index_map_TypeName(object $item) : ?string
  # index_map_CodePath(object $item) : ?string
  # index_map_PowerPath(object $item) : ?string
  # index_map_NameSpace(object $item) : ?string
  # getNamespace(string $namespace, string $className) : ?string
  # getCleanNamespace(string $namespace) : string
}

note right of Set::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    array $repos
    Grep $grep
    Items $items
    ItemReadme $itemReadme
    MainReadme $mainReadme
    Git $git
    ?string $table = null
    ?string $settingsPath = null
    ?string $settingsIndexPath = null
    ?Parser $parser = null
end note

note left of Set::mapItemValue_extends
  Map a single item value (extends)

  since: 5.0.2
  return: void
end note

note right of Set::mapItemValue_extendsinterfaces
  Map a single item value (extendsinterfaces)

  since: 5.0.2
  return: void
end note

note left of Set::mapItemValue_use_selection
  Map a single item value (use_selection)

  since: 5.0.2
  return: void
end note

note right of Set::mapItemValue_load_selection
  Map a single item value (load_selection)

  since: 5.0.2
  return: void
end note

note left of Set::mapItemValue_composer
  Map a single item value (composer)

  since: 5.0.2
  return: void
end note

note right of Set::mapItemValue_implements
  Map a single item value (implements)

  since: 5.0.2
  return: void
end note

note left of Set::updateItem
  update an existing item (if changed)

  since: 5.0.3
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note right of Set::updatePower
  update an existing power code (if changed)

  since: 5.0.3
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note left of Set::createItem
  create a new item

  since: 5.0.3
  return: void
end note

note right of Set::createPower
  create a new power

  since: 5.0.3
  return: void
end note

note left of Set::updateItemReadme
  update an existing item readme

  since: 5.0.3
  return: void
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note right of Set::createItemReadme
  create a new item readme

  since: 5.0.3
  return: void
end note

note left of Set::targetRepo
  check that we have a target repo of this item

  since: 5.0.3
  return: bool
end note

note right of Set::index_map_IndexName
  Get the item name for the index values

  since: 5.0.3
  return: ?string
end note

note left of Set::index_map_TypeName
  Get the item type for the index values

  since: 5.0.3
  return: ?string
end note

note right of Set::index_map_CodePath
  Get the item code path for the index values

  since: 5.0.3
  return: ?string
end note

note left of Set::index_map_PowerPath
  Get the item power path for the index values

  since: 5.0.3
  return: ?string
end note

note right of Set::index_map_NameSpace
  Get the item namespace for the index values

  since: 5.0.3
  return: ?string
end note

note left of Set::getNamespace
  Set the namespace for this power

  since: 5.0.3
  return: ?string
end note

note right of Set::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 5.0.3
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---caf559ee_8337_4f07_9e4a_394d4e06afdc---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

