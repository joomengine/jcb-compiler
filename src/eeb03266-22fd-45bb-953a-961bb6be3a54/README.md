```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Extractor (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**

```uml
@startuml
class Extractor  #Gold {
  # string $table
  # array $powers
  # $db
  + __construct()
  + get_() : ?array
  + get(string $code) : ?array
  + reverse(string $code) : ?array
  + search(string $code) : void
  # load(array $found) : void
  # map(array $found) : ?array
  # filter(array $found) : ?array
  # namespaces(array $guids) : ?array
}

note right of Extractor::__construct
  Constructor

  since: 3.2.0
end note

note left of Extractor::get_
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of Extractor::get
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note left of Extractor::reverse
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of Extractor::search
  Get Super Powers from the code string and load it

  since: 3.2.0
  return: void
end note

note left of Extractor::load
  Load the Super Powers found

  since: 3.2.0
  return: void
end note

note right of Extractor::map
  Map the Super Powers to GUIDs

  since: 3.2.0
  return: ?array
end note

note left of Extractor::filter
  Filter the Super Powers to GUIDs

  since: 3.2.0
  return: ?array
end note

note right of Extractor::namespaces
  Get the complete namespace strings of the guids passed as an array.

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
Super---eeb03266_22fd_45bb_953a_961bb6be3a54---Power
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

