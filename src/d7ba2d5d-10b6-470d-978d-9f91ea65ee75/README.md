```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Field (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**

```uml
@startuml
class Field  #Gold {
  # Data $data
  # Name $name
  # TypeName $typeName
  # UniqueName $uniqueName
  + __construct(?Data $data = null, ?Name $name = null, ...)
  + set(array $field, ?string $singleViewName = null, ...) : void
}

note right of Field::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Data $data = null
    ?Name $name = null
    ?TypeName $typeName = null
    ?UniqueName $uniqueName = null
end note

note right of Field::set
  set Field details

  since: 3.2.0
  return: void
  
  arguments:
    array $field
    ?string $singleViewName = null
    ?string $listViewName = null
    string $amicably = ''
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---d7ba2d5d_10b6_470d_978d_9f91ea65ee75---Power
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

