```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Gui (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**

```uml
@startuml
class Gui  #Gold {
  # Config $config
  # Reverse $reverse
  # Parser $parser
  # $db
  # $app
  + __construct(?Config $config = null, ?Reverse $reverse = null, ...)
  + set(string $string, array $config) : string
  + search(string $file, array $placeholders, ...) : void
  # check(string $code) : bool
}

note right of Gui::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Reverse $reverse = null
    ?Parser $parser = null
end note

note right of Gui::set
  Set the JCB GUI code placeholder

  since: 3.2.0
  return: string
end note

note right of Gui::search
  search a file for gui code blocks that were updated in the IDE

  since: 3.2.0
  return: void
  
  arguments:
    string $file
    array $placeholders
    string $today
    string $target
end note

note right of Gui::check
  search a code to see if there is already any custom
code or other reasons not to add the GUI code placeholders

  since: 3.2.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1bd48df2_4f7e_4581_9fe9_4b54e59105e3---Power
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

