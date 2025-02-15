```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class FilterHelper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Utilities**

```uml
@startuml
abstract FilterHelper  #Orange {
  + {static} extensions() : string
  + {static} names(string $type, ?string $limiter = null) : ?array
  + {static} linked(string $guid, string $method) : ?array
  + {static} namespaces() : ?array
  + {static} namegroup(string $namespace) : ?array
  + {static} translation(string $extension, string $type) : ?array
  + {static} translations(string $language, bool $translated = true) : ?array
  + {static} languages() : ?array
  + {static} paths(string $path) : ?array
  + {static} repositories(int $target) : ?array
  - {static} joomla_component_admin_views(string $guid) : ?array
  - {static} joomla_component_custom_admin_views(string $guid) : ?array
  - {static} joomla_component_site_views(string $guid) : ?array
  - {static} joomla_component(string $guid) : ?array
  - {static} joomla_module(string $guid) : ?array
  - {static} joomla_plugin(string $guid) : ?array
  - {static} admin_view(string $guid) : ?array
}

note right of FilterHelper::extensions
  get extensions grouped list xml

  since: 3.2.0
  return: string
end note

note left of FilterHelper::names
  Get by type the guids and system names

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::linked
  get any area linked GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::namespaces
  get the substrings of the namespace until the last "\" or "."

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::namegroup
  get get IDs of powers matching namespaces

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::translation
  get translation extension guids

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::translations
  get translation ids

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::languages
  get available languages

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::paths
  get get IDs of powers link to this path

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::repositories
  get available repositories of target area

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_component_admin_views
  Get a component admin views GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_component_custom_admin_views
  get a component custom admin views GUIDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_component_site_views
  get a component site views GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_component
  get a component fields GUIDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_module
  get a module fields GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_plugin
  get a plugin fields GUIDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::admin_view
  get an admin view fields GUIDs

  since: 3.2.0
  return: ?array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---cddcac51_9a46_47c4_ba59_105c70453bd6---Power
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

