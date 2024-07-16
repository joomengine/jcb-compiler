```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Extractor (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**

```uml
@startuml
class Extractor  #Gold {
  # int $currentVersion
  # array $existing
  # array $new
  # array $done
  # array $counter
  # array $fileTypes
  # array $placeholders
  # string $today
  # Config $config
  # Gui $gui
  # Paths $paths
  # Reverse $reverse
  # Placeholder $componentPlaceholder
  # Pathfix $pathfix
  # $user
  # $db
  # $app
  + __construct(?Config $config = null, ?Gui $gui = null, ...)
  + run() : void
  # searchFileContent(string $file, $target) : array
  # insert(int $when = 1) : void
  # update(int $when = 1) : void
  # setStartReplace(int $id, int $commentType, ...) : string
  # addLineChecker(string $replaceKey, int $type, ...) : bool|int
  # getSystemID(string $lineContent, array $placeholders, ...) : mixed
}

note right of Extractor::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Gui $gui = null
    ?Paths $paths = null
    ?Reverse $reverse = null
    ?Placeholder $placeholder = null
    ?Pathfix $pathfix = null
end note

note left of Extractor::run
  get the custom code from the local files

  since: 3.2.0
  return: void
end note

note right of Extractor::searchFileContent
  search a file for placeholders and store result

  since: 3.2.0
  return: array
end note

note left of Extractor::insert
  Insert the code

  since: 3.2.0
  return: void
end note

note right of Extractor::update
  Update the code

  since: 3.2.0
  return: void
end note

note left of Extractor::setStartReplace
  set the start replace placeholder

  since: 3.2.0
  return: string
  
  arguments:
    int $id
    int $commentType
    string $startReplace
end note

note right of Extractor::addLineChecker
  Check if this line should be added

  since: 3.2.0
  return: bool|int
  
  arguments:
    string $replaceKey
    int $type
    string $lineContent
end note

note left of Extractor::getSystemID
  search for the system id in the line given

  since: 3.2.0
  return: mixed
  
  arguments:
    string $lineContent
    array $placeholders
    int $commentType
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---01411bb1_fdd6_4cca_84d7_1b62d93c70c1---Power
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

